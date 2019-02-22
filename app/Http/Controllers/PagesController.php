<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getAbout(){
        return view('about');
    }

    public function getContact(){
        return view('contact');
    }

    public function getPacman(){
        return view('pacman');
    }

    public function get2048(){
        return view('2048-generator/game.php');
    }
}
