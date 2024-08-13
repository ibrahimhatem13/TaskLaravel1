<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<form action="{{route("login_user")}}"  method="POST">
    
    <input type="email" name="user_email" placeholder="Enter Your Email">
    <input type="password" name="user_pass" placeholder="Enter Your Password">
    <input type="submit" value="Login Here">
</form>
    <!-- <form action="{{route("postUser")}}" method="post">
        <input type="text"  name='title' placeholder="Enter title">
        <input type="text" name='content' placeholder="Enter content">
        <input type="submit">
    </form> -->
</body>
</html>