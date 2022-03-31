<!DOCTYPE html>
<html lang="en">
<head>
</head>
    <body>
        {!! Form::model($post, [
            'method' => 'PATCH',
            'route' => ['posts.update', $post->id]
        ]) !!}
        
        <div>
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null) !!}
        </div>
        <hr>
        <div>
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null) !!}
        </div>
        <br>
        {!! Form::submit('Update Post') !!}
        
        {!! Form::close() !!}
    </body>
</html>