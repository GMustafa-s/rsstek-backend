<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    //
    public function editDemo(){
        $page = CustomPage::find(6);

        return view('admin.cms.custome-pages.edit-demo', compact('page'));
    }
}
