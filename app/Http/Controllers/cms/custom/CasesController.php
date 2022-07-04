<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    //
    public function editCases(){
        $page = CustomPage::find(5);
        return view('admin.cms.custome-pages.edit-cases', compact('page'));
    }

    //header update
    public  function headerUpdate(){
        dd('header');
    }
}
