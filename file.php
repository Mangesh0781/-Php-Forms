<?php
if($_FILES ['fileupload']){
    $path = $_FILES['fileupload']['name'];
    $upload_path = "./uploads/".$path;
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path);
    die("File uploaded successfully to: " . $upload_path);

}
else {
    die("No file uploaded.");
}

?>