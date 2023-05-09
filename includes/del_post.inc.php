<?php
session_start();
include'dbh.inc.php';
if(!isset($_SESSION['userId'])){
    header("Location: ../Login.php");
    return;
    
}
if(!isset($_GET['pid'])) {
    
    header("Location:../Activities.php");
    
}
else {
    $pid = $_GET['pid'];
    $sql = "DELETE FROM posts WHERE id=$pid";
    mysqli_query($conn, $sql);
    header("Location:../Activities.php");
}
?>