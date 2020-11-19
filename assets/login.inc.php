<?php

include_once "database.inc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email' && password='$password';";
$stmt = mysqli_stmt_init($conn);



?>