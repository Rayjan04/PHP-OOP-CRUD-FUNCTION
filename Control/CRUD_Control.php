<?php
include_once("../Model/Model.php");

$user1 = new functions("","");

//var foo modal
$Modal = "hide";

//for notfication
$notification ="<div></div>";


// add function control;
if(isset($_POST["ADD"])){

    $fname = $_POST["fullname"];
    $email = $_POST["email"];

    //create Object for class user
    $user1 = new functions($fname,$email);

    $identify = $user1->inputvalidation();
    if($identify == false){
        $notification = '<div class="alert alert-warning" role="alert">Please Fill all the blank</div>';
    }elseif($identify == true){
        $user1->add_newdata();
        $notification = '<div class="alert alert-success" role="alert">
        Sucessfully Added 
      </div>';
    }
        // header('Location: index.php '); 
  }


//crete edit function control 
    if(isset($_GET['editid'])){
        $Modal = "show";
    }
    if(isset($_POST['Savechange'])){
         
        $Modal = "hide";
        $editid = $_GET['editid'];
        $Efullname = $_POST['fullname1'];
        $Eemail = $_POST['email1'];

        $user1 = new functions($editid, $Efullname,$Eemail);
        $identify = $user1->inputvalidation();

        if($identify == false){
            $notification = '<div class="alert alert-danger" role="alert">Failed to update please Fill all the blank</div>';
        }elseif($identify == true){
            $user1->edited_user($editid, $Efullname,$Eemail);
            $notification = '<div class="alert alert-success" role="alert">
            Sucessfully Update 
          </div>';
          return ;
        }
        
    }


    //Create delete function control
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $user1->delete_user($deleteid);

        $notification = '<div class="alert alert-danger" role="alert">
        Sucessfully delete
        </div>';
        return ;
    }


?>