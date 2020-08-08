<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $data = request()->validate([
            'user_id' => '',
            'caption' => 'required',
            'image' => "required | image"
        ]);
        request('image')->store('uploads','public');
        auth()->user()->posts()->create($data);
    }
}
