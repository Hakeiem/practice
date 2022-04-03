<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Pleaes, Enter your new user</h1>


    <form method="post" action="/users">
    {{ csrf_field() }}
        <input type="text" name="user_id" placeholder="ID of user">
        <input type="text" name="phone" placeholder="05XXX">

        <input type="submit" name="submit">
    </form>
</body>
</html>