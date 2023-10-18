<?php
    require_once('connect.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    $spec = $_POST['spec'];

    mysqli_query($connect, "INSERT INTO `questions` (`id`, `name`, `surname`, `phone`, `city`, `question`, `spec`) 
    VALUES (NULL, '$name', '$surname', '$phone', '$city', '$question', '$spec')");

    header("Location: ../success.php");

?>
