<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    public function create(){
        return view('create_blog');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'author' => 'required|min:5|max:25',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $blogs=$request->all();

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $blogs['image'] = $imageName;
        }

        Blog::create($blogs);

        // Blog::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'author' => $request->author,
        // ]);

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

        if($blog->image){
            $oldImagePath=public_path('images/'.$blog->image);
            if(File::exists($oldImagePath)){
                File::delete($oldImagePath);
            }
        }

        $blog->delete();

        return redirect('/')->with('success','Blog ပြင်ဆင်ပြီးပါပြီ။');
    }

    public function edit($id){
        $blog=Blog::findOrFail($id);

        return view('edit_blog', compact('blog'));
    }

    public function update(Request $request, $id){
        $blog=Blog::findOrFail($id);

        $data=$request->all();

        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'author' => 'required|min:5|max:25',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if($request->hasFile('image')){
            if($blog->image){
                $oldImagePath=public_path('images/'.$blog->image);
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }

            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
            $data['image']=$imageName;
        }

        $blog->update($data);

        // $blog->update([
        //     'title'=>$request->title,
        //     'content'=>$request->content,
        //     'author'=>$request->author,
        // ]);

        return redirect('/')->with('success','Blog ပြင်ဆင်ပြီးပါပြီ။');
    }
}
