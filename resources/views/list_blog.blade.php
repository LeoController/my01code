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
        <h3>{{ $blog->title }}</h3>
        <p>{{ $blog->content }}</p>
        <i>{{ $blog->author }}</i> 
    </div>
    <a href="/blog/{{ $blog->id }}">အသေးစိတ်ကြည့်ရန်</a>
    <hr>
@endforeach
