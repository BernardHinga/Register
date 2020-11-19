<?php

include_once "database.inc.php";

    $firstname = $_POST['uno'];
    $secondname = $_POST['dos'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (firstname, secondname, email, password) VALUES ('$firstname', '$secondname', '$email', '$password')";

    mysqli_query($conn, $sql);

?>