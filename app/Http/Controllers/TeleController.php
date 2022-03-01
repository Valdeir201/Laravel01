<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeleController extends Controller
{
    public function index() {

        $nome = "Valdeir";
        $idade = 28;
    
        $arr = [10,20,30,40,50];    
    
        $nomes = ["Matheus","Ana","João","Saulo",];
    
        return view('nova', ['nome' => $nome,'idade' => $idade,'arr' => $arr, 'nomes' => $nomes]);
    
    }

    public function cadastrar() {

  
    
        return view('telecentro.cadastrar');
    
    }
}
