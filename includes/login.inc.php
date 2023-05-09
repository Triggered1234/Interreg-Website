<?php

if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if(empty($mailuid) || empty($password)) {
              header("Location: ../Login.php?error=emptyfields");
        exit();
     
    }
    else {
       $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
                   header("Location: ../Login.php?error=sqlerror");
        exit();
     
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            $admin = $row['admin'];
            if ($pwdCheck == false) {
                       header("Location: ../Login.php?error=wrongpwd");
        exit(); 
            }
            else if($pwdCheck == true){
                session_start();
                $_SESSION['userId']= $row['idUsers'];
                 $_SESSION['userUid']= $row['uidUsers'];
                 if ($admin == 1){
                     $_SESSION['admin'] = 1;
                 }
               header("Location: ../index.php?login=success");   
               exit();
                 
            }
            
         
            else{
     header("Location: ../Login.php?error=wrongpwd");
        exit(); 
            }
              header("Location: ../Login.php?error=nouser");
        exit(); 
            }
        }
    }
}

else
{
              header("Location: ../Login.php");
        exit();
     
}