<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::index()]);
    }

    public function menu(){
        return view('menu', ['posts' => Menu::menu()]);
    }

    public function today(){
        return view('today-special', ['posts' => Post::today()]);
    }

    public function contact(){
        return view('contact');
    }
}
