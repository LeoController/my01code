@extends('layouts.app')

@section('content')
    <h1>ကျွန်တော်တို့ရဲ့ Blog Post များ</h1>
    <div>
        <a href="/create">Blog အသစ်တင်ရန်</a>
    </div>
    <hr>

    @if(session('success'))
        <div>{{ session('success') }}</div>
        <hr>
    @endif

    @foreach($blogs as $blog)
        <div>
            @if($blog->image)
                <img src="{{ asset('images/'.$blog->image) }}" alt="{{ $blog->title }}" style="width: 200px;height: auto;">
            @endif
            <h3>{{ $blog->title }}</h3>
            <p>{{ $blog->content }}</p>
            <i>{{ $blog->author }}</i> 
        </div>
        <a href="/blog/{{ $blog->id }}">အသေးစိတ်ကြည့်ရန်</a> | 
        <a href="/blog/{{ $blog->id }}/edit">Blog အချက်အလက်များပြင်ဆင်ရန်</a> | 
        <form action="/blog/{{ $blog->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">ဖျက်မယ်</button>
        </form>
        <hr>
    @endforeach
@endsection