<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter your name" />
        <br><br>
        <button name="button" value="set">Set Sessions</button>
        <br><br>
        <button name="button" value="get"> Display Sessions</button>
        <br><br>
        <button name="button" value="delete"> Delete Session</button>
    </form>
</body>
</html>

<?php
session_start();

if(isset($_POST['button'])){
    if($_POST['button'] =="set"){
        $val=$_POST['user'];
        $_SESSION['user'] = $val; // Set a session variable named "user" with input value

    }

    if($_POST['button']=="get"){
       echo $_SESSION['user']; // Display value of the "user" session variable
    }

    if($_POST['button']=="delete"){
        session_destroy();
    }
}

// // Note: Sessions are stored on the server side, unlike cookies which are stored on the client side.
// // Sessions are more secure for sensitive data as they are not exposed to the client.