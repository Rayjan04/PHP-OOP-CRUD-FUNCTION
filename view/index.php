<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP PHP</title>
    <link rel=" stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></sodium_crypto_sign_ed25519_pk_to_curve25519>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
   
    <?php include("../Control/CRUD_Control.php");?>
    <?php include("modalEdit.php");?>
    <nav class="navtop">
    <div>
            <h1>PHP OOP CRUD MVC Function</h1>
    </div>
    </nav>
        <div class="container">
        <!-- Content here -->
            <br>
            <!--message here-->
            <?php 
                echo $notification;
            ?>
            <br>
            
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Fullname</label>
                    <input type="text" name="fullname"class="form-control" id="exampleInputEmail1" placeholder="Enter your fullname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="submit" name="ADD" value="Submit" class="btn btn-primary">
                </form>
        </div>
            
    <?php include 'table_content.php';?>
</body>
</html>
<script>
$(document).ready(function(){
    $("#exampleModal").modal('<?php echo $Modal?>');
});
</script>