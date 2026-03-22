@extends('layouts.app')
@section('content')
    <h1>{{ $blog->title }}</h1>
    <i>{{ $blog->author }} | {{ $blog->created_at->format('d M Y') }}</i>
    <br><br>
    <img src="{{ asset('images/'.$blog->image) }}" alt="{{ $blog->title }}" style="width: 200px;height: auto;">
    <br><br>
    <p>{{ $blog->content }}</p>
    <a href="/">မူလစာမျက်နှာသို့ပြန်သွားရန်</a>
@endsection