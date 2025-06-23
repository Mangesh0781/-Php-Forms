<?php
if(isset($_REQUEST['btn'])){
click();
};

function click(){
    echo "Button Clicked! function is called";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call A Funtion On Button Click </title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="btn"> 
            Call Back Funtion
        </button>
    </form>
</body>
</html>

<!-- When button will clicl the function will be call  -->