<?php

require "../Models/User.php";

$username = "";
$password = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user = new User(new db);
    $user->login($username,$password);
}

?>