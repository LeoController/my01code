<h1>Blog တင်ရန် Form</h1>
<form action="/store" method="POST">
    @csrf <input type="text" name="title" placeholder="ခေါင်းစဉ် ရေးပါ"><br><br>
    <textarea name="content" placeholder="အကြောင်းအရာ ရေးပါ"></textarea><br><br>
    <input type="text" name="author" placeholder="ရေးသူအမည်"><br><br>
    <button type="submit">Post တင်မယ်</button>
</form>