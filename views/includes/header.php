<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <style>
        * {
            border-radius: 7px;
        }
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
            background-size: cover;
            height: 100vh;
            background-position: center;
        }
        .interact {
            width: 360px;
            padding: 10% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: rgba(57, 255, 20, 0.6);
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }

        .form input {
            font-family: sans-serif;
            outline: 1;
            background: whitesmoke;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: sans-serif;
            outline: 0;
            background: burlywood;
            width: 100%;
            padding: 15px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 7px;
        }

        .form button:hover,
        .form button:active {
            background: brown;
            
        }
        .error {
            color: red;
        }
        .form .message {
            margin: 15px;
            font-size: 12px;
            color: rgb(17, 8, 102);
        }

        .form .message a {
            text-decoration: none;
        }
    </style>
</head>
<body>