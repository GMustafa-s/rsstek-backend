<?php

namespace App\Http\Controllers\cms\cumtom;
use App\Models\GeneralSetting;
use App\Models\SocialLink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    public function index(){
        $generals = GeneralSetting::first();
        $social_links = SocialLink::all();
      return view('admin.cms.customepages.home',compact('generals','social_links'));
    }

    
}
