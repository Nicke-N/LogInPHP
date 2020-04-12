<?php
    include "./includes/header.php";

    include ("../Controllers/login.php");
?>
    <div class="interact">
        <div class="form">
            <?php if(isset($_SESSION["Error"]))
            { ?>
            <p class="error"><?php echo $_SESSION["Error"] ?></p>
            <?php unset($_SESSION["Error"]); } ?>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Create</button>
                <p class="message">Not a member yet? <a href="register.php">Register</a></p>
            </form>                  
        </div>
    </div>
<?php
    include "./includes/footer.php";
?>