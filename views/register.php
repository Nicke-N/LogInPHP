<?php
    include "./includes/header.php";

    include ("../Controllers/register.php");
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
                <button type="submit" name="register">Create</button>
                <p class="message">Already a member? <a href="login.php">Login</a></p>
            </form>                  
        </div>
    </div>
<?php 
    include "./includes/footer.php";
?>