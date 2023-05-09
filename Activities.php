<?php
require'header.php';
?>

   <title>Activities | Creativity Without Frontiers</title>
   
<?php 
require_once("includes/dbh.inc.php");
require_once("nbbc/nbbc.php");
$bbcode = new BBCode;

$sql = "SELECT * FROM posts ORDER BY id DESC";

$res = mysqli_query($conn, $sql) or die(mysqli_error());

$posts= "";

    if(isset($_SESSION['admin']) && $_SESSION['admin'] ==1){
                echo '<a href="post.php" class="leader">Make a new post</a>
                
                <br>
                
        ';}
if(mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)){
        
        
    
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $date = $row['date'];
 $output = $bbcode->Parse($content);
    $admin= "<div><a href='includes/del_post.inc.php?pid=$id' class='leader1'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id' target='_blank' class='leader1'>Edit</a></div> ";
                   if(isset($_SESSION['admin']) && $_SESSION['admin'] ==1){
    echo "<div><h2 class='leader'> $title </h2> <h4 class='leader1'>$date</h4><p class='leader1'>$output</p>$admin<hr /></div>";
    
}
else {
        echo "<div><h2 class='leader'> $title </h2> <h4 class='leader1'>$date</h4><p class='leader1'>$output</p><hr /></div>";
        }
}




    



}
else {
    echo'<p class="leader">There are no posts to display</p>
        <br>
        <br>
           <br>
        <br>   <br>
        <br>   <br>
        <br>   <br>
        <br>   <br>
        <br>   <br>
        <br> <br><br><br><br><br>
        ';
}



require "footer.php";
?>