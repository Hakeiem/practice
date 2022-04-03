<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Pleaes, Enter your new user</h1>


    <form method="post" action="/users">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="example@domain.com">
        <input type="password" name="password" placeholder="">

        <input type="submit" name="submit">
    </form>
</body>
</html>