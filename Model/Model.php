<?php 

 include_once('../Control/connection.php'); 

    class users{
        //create properites
        public $fullname;
        public $email;
        public $valid;
        public $id;
        //method 
        function __construct($fullname, $email){
            $this->fullname = $fullname;
            $this->email = $email;
        }
        function inputvalidation(){
            if($this->fullname == null  || $this->email == null){
                $valid = false;
            }else{
                $valid = true;   
            }
            return $valid;
        }
    }
    
    class functions extends users {

        //method add_newdata
        function add_newdata(){      
            $conn = connection();
            $sql = "INSERT INTO `tabledata` (`id`, `fullname`, `email`) VALUES ('', '$this->fullname', '$this->email');";
            $conn->query($sql) or die ($conn->connect);
      }
       //method delete_user
      function delete_user($id){
            $conn = connection();
            $sql = "DELETE FROM tabledata WHERE id = $id ";
            $conn->query($sql) or die ($conn->connect);
      
    }
      //method edited_user
      function edited_user($id,$fullname,$email){
            $conn = connection();
            $sql = "UPDATE `tabledata` SET `fullname` = '$fullname', `email` = '$email' WHERE `tabledata`.`id` = $id;";
            $conn->query($sql) or die ($conn->connect);
        }
    }
?>