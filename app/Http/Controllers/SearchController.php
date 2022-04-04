<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        var_dump($_POST);
        return view('site.search');
    }
}
