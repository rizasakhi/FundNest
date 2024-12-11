<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createCampaignController extends Controller
{
    public function index(){
        return view('create-campaign');
    }
}
