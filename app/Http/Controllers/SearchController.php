<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){        
        return view('site.search');
    }

    public function txtPreview($doc, $search){
        $doc = strtolower($doc);
        $doc = explode(" ",$doc);
        $wordIndice =array_search($search, $doc);
        if ($wordIndice >=250) {
            $doc = array_slice($doc, $wordIndice - 249, 500);
        }
        else{
            $doc = array_slice($doc, $wordIndice, 500);
        }
        $doc = str_ireplace($search, "<strong>" . $search . "</strong>", $doc);
        $doc = implode(" ", $doc);
        return view('site.search');
    }

}
