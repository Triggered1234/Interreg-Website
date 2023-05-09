<?php
session_start();
require_once("includes/dbh.inc.php");
require 'header.php';
if(!isset($_SESSION['userId'])){
    header("Location: ../Login.php");
    return;}
    
    if(!isset($_GET['pid'])) {
    
    header("Location:../Activities.php");
    
}

$pid = $_GET['pid'];
    
    if(isset($_POST['update'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);
    
    
    
            $title = mysqli_real_escape_string($conn, $title);
            $content = mysqli_real_escape_string($conn, $content);
            $date = date('l jS \of F Y h:i:s A');
            $sql = "UPDATE posts SET title='$title', content='$content', date='$date' WHERE id=$pid";
            
              if(empty($title) || empty($content)) {
            
    echo 'Please complete your post!';
                return;
            }
            
mysqli_query($conn, $sql);

header("Location:../Activities.php");



}
?>
<div class="header2">
	<h2>Make a new post</h2>
	</div>
	
<?php
$sql_get= "SELECT * FROM posts WHERE id=$pid LIMIT 1";
$res = mysqli_query($conn, $sql_get);

if(mysqli_num_rows($res)>0) {
    while ($row = mysqli_fetch_assoc($res)){
            $title = $row['title'];
            $content = $row['content'];
            
            
            
      echo "<form action='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'> ";
echo "<div class='input-group'>
        <label>Title</label>
    <input placeholder='Title' name='title' type='text' value= '$title' autofocus-size='48'><br /> <br /></div>";
echo "<div class='input-group'>
     <label>Content</label></div>
    <div class='input-group'>
    <textarea placeholder='Content' name='content' rows='20' cols='50'> $content</textarea><br /></div> ";
    }
}

?>
    
    <input name="update" type="submit" value="Update" class="btn">
</form>

<br>
<br>
<br>
<br>
<br>

<?php
require 'footer.php';
?>