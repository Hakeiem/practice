<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href='/posts/create'><button>Create Post</button></a>
    @foreach ($posts as $post)
        <a href='/posts/{{$post->id}}'><h1>{{$post->name}}</h1></a>
        <h3>{{$post->created_at}}</h3>
    @endforeach
</body>
</html>