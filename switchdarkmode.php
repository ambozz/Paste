<?php

if(isset($_COOKIE["darkmode"])){
    unset($_COOKIE["darkmode"]);
    setcookie("darkmode", "", time() - 3600);
}else{
    setcookie("darkmode", 1, 2147483647);
}

?>