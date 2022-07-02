<?php

namespace App\Http\Controllers\cms\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    //
    public function editCases(){
        return view('admin.cms.custome-pages.edit-cases');
    }
}
