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
                <td>
                    <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <a href="{{ route('posts.destroy',$post->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
