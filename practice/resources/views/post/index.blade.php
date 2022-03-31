<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    @foreach ($posts as $post)
        <a href='/posts/{{$post->id}}'><h1>{{$post->name}}</h1></a>
    @endforeach
</body>
</html>