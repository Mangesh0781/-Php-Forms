<?php

setcookie("fruit", "apple", time()+86400,);

if(isset($_COOKIE['fruit'])){
    echo "Currnt Cookie Vlaue : ". $_COOKIE['fruit'];

}else{
        echo "cookie is not set";
}


?>
<!-- How Cookie Really Works  -->