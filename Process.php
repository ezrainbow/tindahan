<?php 
require_once('Connection.php');
session_start();
    if(isset($_POST['Login'])){
        $username = $_POST['UName'];
        $password = $_POST['Password'];
        $user_id = 0;
        $status = "d";
        
        if(empty($username) || empty($password)){
            header("location:index.php?Empty= Please Fill in the Blanks");
        }
        else{
            $stmt = $con->prepare("SELECT id, Username, Password FROM tbl_users WHERE Username=? AND Password=? LIMIT 1");
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $stmt->bind_result($user_id, $username, $password);
            $stmt->store_result();

            if($stmt->num_rows == 1){
                $_SESSION['User'] = $username;
                header("location:welcome.php");      
            }
            else{
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
            $stmt->close();           
        } 
    }
    else{

    }

?>