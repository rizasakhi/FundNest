<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Storage;


class CampaignController extends Controller
{
    
    public function index(Request $request){

        $lang = App::getLocale();
        $tr = new GoogleTranslate($lang);

        // $campaign = Campaign::all();
        $query = Campaign::query();

        if($request->has('search') && !empty($request->search) ){
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }
        
        $campaign = $query->paginate(4);

        foreach($campaign as $cmp){
            $cmp->name = $tr->translate($cmp->name);
            $cmp->description = $tr->translate($cmp->description);
        }

        // $filePath = storage_path('app/public/campaigns/' . $campaign[0]->banner_image);
        // $imageData = base64_encode(file_get_contents($filePath));
        // $imageType = mime_content_type($filePath);

        return view('campaign', compact('campaign'));
    }

    public function search(Request $request){
        if($request->has('search')){
            $campaign = Campaign::where('name', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $campaign = Campaign::all();
        }

        return view('campaign', compact('campaign'));

    }

    public function destroy($id){
        $campaign = Campaign::find($id);

        if ($campaign->user_id !== auth()->id()) {
            return redirect()->route('campaign')->with('error', 'You are not authorized to delete this campaign.');
        }

        $campaign->delete();

        return redirect()->route('campaign')->with('success', 'Campaign deleted successfully!');
    }

}
