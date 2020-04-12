<?php 
include ("../Controllers/logout.php");
include ("includes/header.php");

session_start();
?> 

<div class="container">
    <div class="row mt-5">
      <div class="col-md-6 m-auto">
        <div class="card card-body">
        <h1>
          <?php echo $_SESSION["user"]["username"] ?>
        </h1>
          <h3 class="text-center mb-3">
            Logout
          </h1>
          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <button class="btn btn-block btn-danger" type="submit" name="logout">
              Logout
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


<?php
include ("includes/footer.php");
?>