<?php
print_r($_REQUEST);

$_REQUEST ['dummy']='test';
 foreach ($_REQUEST as $key=> $data ){
    echo  $key  . " is ".     $data;
    echo "<br/>";
    
}
// use foreach for displaying the data
?>