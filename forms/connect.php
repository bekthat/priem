<?php
    $connect = mysqli_connect('localhost', 'root', '','contact');

    if (!$connect){
        die('Database error');
    }
?>