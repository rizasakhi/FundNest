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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

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

        $campaign->user_id = auth()->id();

        $campaign->save();

        return redirect()->route('campaign')->with('success', 'Campaign created successfully!');
    }

    public function edit($id){
        $campaign = Campaign::findOrFail($id);
        if ($campaign->user_id !== auth()->id()) {
            return redirect()->route('campaign')->with('error', 'You do not have permission to update this campaign.');
        }
        return view('edit-campaign', compact('campaign'));
    }

    public function update(Request $request, $id){
        $campaign = Campaign::findOrFail($id);
        if ($campaign->user_id !== auth()->id()) {
            return redirect()->route('campaign')->with('error', 'You do not have permission to update this campaign.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $campaign->name = $request->name;
        $campaign->description = $request->description;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        if ($request->hasFile('banner_image')) {
            $filePath = $request->file('banner_image')->store('campaigns', 'public');
            $campaign->banner_image = $filePath;
        }

        $campaign->update();

        return redirect()->route('campaign')->with('success', 'Campaign updated successfully!');

    }

}
