<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || !filter_var($username, FILTER_VALIDATE_EMAIL)) {
        exit;
    }

    $student_number = substr($password, 1);
    if(!preg_match("/^[0-9]{10}$/", $student_number)) {
        header("Location: index.html"); 
        exit;
    }

    echo "Hoşgeldiniz $password";
} else {
    header("Location: index.html"); 
}
?>