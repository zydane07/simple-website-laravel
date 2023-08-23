<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index()
    {
        //
        $user = request()->user();

        return view('index', [
            'title' => 'Homepage',
            'posts' => Home::all(),
            'user' => $user,

        ]);
    }
    public function find($id)
    {
        $user = request()->user();

        $post = Home::find($id);

        //
        return view('clicked_post', [
            'title' => 'Single Post',
            'post' => $post,
            'user' => $user,

        ]);
    }
    public function about()
    {
        //
        $user = request()->user();

        return view('about', [
            'title' => 'About Me',
            'user' => $user,

        ]);
    }
}
