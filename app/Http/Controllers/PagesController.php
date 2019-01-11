<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function inicio(){
        return view('welcome');
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
