<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    public function inicio(){
        $notas = APp\Nota::all();
        return view('welcome',compact('notas'));
    }

    public function fotos(){
        return view('fotos');
    }

    public function nosotros($nombre = null){
               $equipo = ['David','Juan','Jose'];
             //  return view('nosotros',['equipo' => $equipo]);
            return view('nosotros',compact('equipo','nombre'));
    }

    public function noticias(){
        return view('blog');
    }
}
