<?php

require "../Models/User.php";

$username = "";
$password = "";

if (isset($_POST["register"])) {
  //get vars
  $username = $_POST["username"];
  $password = $_POST["password"];

  $data = [
      "username" => $username,
      "password" => $password
    ];

  $user = new User(new Db);
  $user->createUser($data);
}

?>