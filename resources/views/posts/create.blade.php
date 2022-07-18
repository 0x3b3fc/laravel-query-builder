<h1>create post</h1>

<form action="{{ route('posts.insert') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="enter title"><br><br>
    <input type="text" name="body" placeholder="enter body"><br><br>
    <button type="submit">Submit</button>
</form>
