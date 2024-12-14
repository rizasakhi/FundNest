<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CampaignController extends Controller
{
    public function index(){

        $lang = App::getLocale();
        $tr = new GoogleTranslate($lang);

        $campaign = Campaign::all();

        foreach($campaign as $cmp){
            $cmp->name = $tr->translate($cmp->name);
            $cmp->description = $tr->translate($cmp->description);
        }

        return view('campaign', compact('campaign'));
    }
}
