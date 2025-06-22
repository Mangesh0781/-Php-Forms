<?php

if($_SERVER ["REQUEST_METHOD"]=="GET"){
echo "User name is ".$_GET['user_name']; 
echo "<br/>";
echo "User Password is ".$_GET['password'];
}
// login form is just for know the interaction with html and php 