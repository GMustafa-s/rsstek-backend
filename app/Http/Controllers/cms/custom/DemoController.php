<?php

namespace App\Http\Controllers\cms\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function editDemo(){
        return view('admin.cms.custome-pages.edit-demo');
    }
}
