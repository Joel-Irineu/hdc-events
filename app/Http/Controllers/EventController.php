<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = 'irineu';
        $idade = 20;

        $arr = [10,20,30,40,50];
        $nomes = ['jesus', 'maria', 'josé'];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'programador',
            'arr' => $arr,
            'nomes' => $nomes,
        ]);
    }

    public function create(){
        return view('events/create');
    }
}
