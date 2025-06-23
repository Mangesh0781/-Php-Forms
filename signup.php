<?
echo print_r($_REQUEST);
// we can use $_REQUEST to get all the data from the form
// we can also use $_POST or $_GET depending on the method used in the form

foreach ($_REQUEST as $key => $value) {
    echo "$key: $value<br>";
}
?>