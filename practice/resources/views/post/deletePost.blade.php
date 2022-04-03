<!DOCTYPE html>
<html lang="en">
<head>
</head>
    <body>
        {!! Form::model($post, [
            'method' => 'DELETE',
            'route' => ['posts.delete', $post->id]
        ]) !!}
        
        <div>
            <h1>{{$post->name}}</h1>
        </div>
        <hr>
        <div>
            <h2>{{$post->body}}</h2>
        </div>
        <br>
        {!! Form::submit('Delete Post') !!}
        
        {!! Form::close() !!}
    </body>
</html>