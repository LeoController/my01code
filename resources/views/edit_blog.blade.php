<h1>Blog ID No. {{ $blog->id }} ကို ပြင်ရန် Form</h1>
<form action="/blog/{{ $blog->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $blog->title }}"><br><br>
    <textarea name="content">{{ $blog->content }}</textarea><br><br>
    <input type="text" name="author" value="{{ $blog->author }}"><br><br>
    <button type="submit">ပြင်ဆင်မည်။</button>
</form>
