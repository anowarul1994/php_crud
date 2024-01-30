<?php
    $connect = new mysqli("localhost", "root", "", "php_crud");
    if(!$connect){
        die(mysqli_error($connect));
    }
?>