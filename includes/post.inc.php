<?php
session_start();
require'dbh.inc.php';
if(isset($_POST['post'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);
           
        
      if(empty($title) || empty($content)) {
            
    echo 'Please complete your post!';
                return;
            }
    else{
            $title = mysqli_real_escape_string($conn, $title);
            $content = mysqli_real_escape_string($conn, $content);
            $date = date('l jS \of F Y h:i:s A');
            $sql = "INSERT into `posts` (`title`, `content` , `date`) VALUES ('$title' , '$content' , '$date')";
            
      


mysqli_query($conn, $sql);

header("Location:../Activities.php");
}
}

?>