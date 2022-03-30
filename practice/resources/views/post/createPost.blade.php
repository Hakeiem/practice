<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Pleaes, Enter your new post</h1>


    <form method="post" action="/posts">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Post Name">
        <input type="text" name="body" placeholder="Type...">

        <input type="submit" name="submit">
    </form>
</body>
</html>