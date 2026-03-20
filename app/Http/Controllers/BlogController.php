<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function create(){
        return view('create_blog');
    }

    public function store(Request $request){
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect('/create')->with('success','Blog တင်တာအောင်မြင်ပါသည်။');
    }
}
