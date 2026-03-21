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

        return redirect('/')->with('success','Blog တင်တာအောင်မြင်ပါသည်။');
    }

    public function list(){
        $blogs=Blog::latest()->get();

        return view('list_blog',compact('blogs'));
    }

    public function show($id){
        $blog=Blog::findOrFail($id);

        return view('show_blog', compact('blog'));
    }

    public function destory($id){
        $blog=Blog::findOrFail($id);

        $blog->delete();
        
        return redirect('/')->with('success','Blog ပြင်ဆင်ပြီးပါပြီ။');
    }

    public function edit($id){
        $blog=Blog::findOrFail($id);

        return view('edit_blog', compact('blog'));
    }

    public function update(Request $request, $id){
        $blog=Blog::findOrFail($id);

        $blog->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
        ]);

        return redirect('/')->with('success','Blog ပြင်ဆင်ပြီးပါပြီ။');
    }
}
