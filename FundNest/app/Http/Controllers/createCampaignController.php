<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class createCampaignController extends Controller
{
    public function index(){
        return view('create-campaign');
    }

    public function store(Request $request) {

        $campaign = new Campaign();
        $campaign->name = $request->name;
        $campaign->description = $request->description;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        $campaign->banner_image = $request->banner_image;

        if ($request->hasFile('banner_image')) {
            $filePath = $request->file('banner_image')->store('campaigns', 'public');
            $campaign->banner_image = $filePath;
        }

        $campaign->save();

        return redirect()->route('campaign')->with('success', 'Campaign created successfully!');
    }

    public function edit($id){
        $campaign = Campaign::find($id);
        return view('edit-campaign', compact('campaign'));
    }

    public function update(Request $request, $id){
        $campaign = Campaign::find($id);
        $campaign->name = $request->name;
        $campaign->description = $request->description;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        $campaign->banner_image = $request->banner_image;
        $campaign->update();

        return redirect()->route('campaign');

    }

}
