<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie With Multiple Actions</title>
</head>
<body>

    <!-- ✅ HTML Form to interact with cookies using buttons -->
    <form action="" method="post">
        <!-- Input field for user's name -->
        <input type="text" name="user" placeholder="Enter your name" />
        <br><br>

        <!-- Button to Set the Cookie -->
        <button name="button" value="set"> Set Cookie</button>
        <br><br>

        <!-- Button to Display the Cookie -->
        <button name="button" value="display"> Display Cookie</button>
        <br><br>

        <!-- Button to Delete the Cookie -->
        <button name="button" value="delete"> Delete Cookie</button>
    </form>

</body>
</html>

<?php

// ✅ Check if any button was clicked in the form
if(isset($_POST['button'])) {

    // 🔹 If "Set Cookie" button is clicked
    if($_POST['button'] == "set") {
        $val = $_POST['user']; // Get user input
        setcookie("user", $val); // Set a cookie named "user" with input value
        echo "<br>";
        echo "Cookie is set";
    }

    // 🔹 If "Display Cookie" button is clicked
    if($_POST['button'] == "display") {
        if(isset($_COOKIE['user'])) {
            echo "<br>";
            echo $_COOKIE['user']; // Display value of the "user" cookie
        }
    }

    // 🔹 If "Delete Cookie" button is clicked
    if($_POST['button'] == "delete") {
        if(isset($_COOKIE['user'])) {
            setcookie("user", null, -1); // Delete the cookie by setting it to null and expiring it
            echo "<br>";
            echo "Cookie deleted";
        }
    }
}
?>
