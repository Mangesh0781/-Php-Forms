<?php
if(isset($_POST['filename'])){
$filename ="files/".$_POST['filename'];
$content = $_POST['content'];
$file=fopen($filename, "w") or die("unabale to open the .$filename,");
fwrite($file, $content);
fclose($file);
echo "File created successfully: $filename";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a file with php</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filename" placeholder="enter file name"/>
         <br><br>
         <textarea name="content" id="" label="Enter text here">

         </textarea>
<br><br>
         <button>create file</button>

    </form>
</body>
</html>