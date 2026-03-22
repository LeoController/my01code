@extends('layouts.app')
@section('content')
    <h1>Blog ID No. {{ $blog->id }} ကို ပြင်ရန် Form</h1>
    <form action="/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $blog->title }}">
        <br>
        @error('title')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <textarea name="content">{{ $blog->content }}</textarea>
        <br>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <input type="text" name="author" value="{{ $blog->author }}">
        <br>
        @error('author')
            <div>{{ $message }}</div>
        @enderror
        <br>

        @if($blog->image)
            <p>ပုံအဟောင်း</p>
            <img src="{{ asset('images/'.$blog->image) }}" alt="" style="width:100px; height:auto;">
        @endif
        <br>
        <br>
        <input type="file" name="image">
        <br>
        @error('image')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">ပြင်ဆင်မည်။</button>
    </form>
@endsection
