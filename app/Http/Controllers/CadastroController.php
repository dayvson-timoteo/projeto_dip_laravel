<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('site.cadastro');
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
        return $doc;
    }
}

