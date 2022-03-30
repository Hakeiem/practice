<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    @foreach ($posts as $post)
        <h1>{{$post->name}}</h1>
    @endforeach
</body>
</html>