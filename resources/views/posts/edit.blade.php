<h1>edit post</h1>

<form action="#" method="post">
    @csrf
    <input type="text" name="title" value="{{$post->title}}" placeholder="enter title"><br><br>
    <input type="text" name="body" value="{{$post->body}}" placeholder="enter body"><br><br>
    <button type="submit">Submit</button>
</form>
