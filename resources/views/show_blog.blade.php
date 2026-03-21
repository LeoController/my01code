<h1>{{ $blog->title }}</h1>
<i>{{ $blog->author }} | {{ $blog->created_at->format('d M Y') }}</i>
<p>{{ $blog->content }}</p>
<a href="/">မူလစာမျက်နှာသို့ပြန်သွားရန်</a>