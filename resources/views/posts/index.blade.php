<h1>All Posts</h1>
<table border="1">
    <thead>
        <th>Title</th>
        <th>Body</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
