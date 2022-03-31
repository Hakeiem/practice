<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>{{$post->name}}</h1>
    <hr>
    <h2>{{$post->body}}</h2>
    <br><br>
    <a href='/posts/{{$post->id}}/edit'><button>Edit</button></a>
</body>
</html>