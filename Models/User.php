<?php

include "Db.php";

    class User 
    {
        private $db; 

        public function __construct(Db $db)
        {
            $this->db = $db;
        }

        public function createUser($data)
        {

            
            if(strlen($data["username"]) > 10) {
                $_SESSION["Error"] = "The username is too long!";
                return; 
            }
 
                $query = "SELECT * FROM users WHERE username = :username";
                $stmt = $this->db->connect()->prepare($query);
                $stmt->bindValue("username", htmlspecialchars($data["username"]), FILTER_SANITIZE_STRING);
                $stmt->execute();
                $user = $stmt->fetch();

                if ($user) {
                    $_SESSION["Error"] = "This user already exists!"; 
                    return;
                }

                $hash = password_hash($data["password"], PASSWORD_DEFAULT);
                $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $stmt = $this->db->connect()->prepare($query);
                $stmt->bindValue("username", htmlspecialchars($data["username"]), FILTER_SANITIZE_STRING);
                $stmt->bindValue("password", $hash, FILTER_SANITIZE_STRING);
                $stmt->execute();
                
               header("Location: ../views/login.php");
    
        }

        public function login($username, $password)
        {
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->db->connect()->prepare($query);
            $stmt->bindValue("username", htmlspecialchars($username), FILTER_SANITIZE_STRING);
            $stmt->execute();
            $user = $stmt->fetch();


            if (!$user) {
                $_SESSION["Error"] = "User doesn't exist!";
                return;
            }
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location: ../views/home.php");
            } else {
                $_SESSION["Error"] = "Incorrect password, try again!";
            }
        }

        public static function Logout()
        {
            session_unset();
            header("Location: ../views/login.php");
        }
    }