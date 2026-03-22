@extends('layouts.app')
@section('content')
    <h1>Blog တင်ရန် Form</h1>
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf <input type="text" name="title" placeholder="ခေါင်းစဉ် ရေးပါ" value="{{ old('title') }}">
        <br>
        @error('title')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <textarea name="content" placeholder="အကြောင်းအရာ ရေးပါ">{{ old('content') }}</textarea>
        <br>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <input type="text" name="author" placeholder="ရေးသူအမည်" value="{{ old('author') }}">
        <br>
        @error('author')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <input type="file" name="image">
        <br>
        @error('image')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Post တင်မယ်</button>
    </form>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
@endsection