<?php
require_once("includes/dbh.inc.php");
require 'header.php';
require ('includes/post.inc.php');
require ('includes/postimage.inc.php');
if(!isset($_SESSION['userId'])){
    header("Location: ../Login.php");
    return;}
?>
<title>Post a new activity | Creativity Without Frontiers</title>
<div class="header2">
	<h2>Post a new activity</h2>
	</div>
<form action="post.php" method="post" enctype="multipart/form-data">
    <div class="input-group">
        <label>Title</label>
    <input placeholder="Title" name="title" type="text" autofocus-size="48"><br /> <br /></div>
    <div class="input-group">
     <label>Content</label></div>
    <div class="input-group">
    <textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br /></div>
      <input name="post" type="submit" value="Post" class="btn">
    </form>
</form>

<br>
<br>
<br>
<br>
<br>

<?php
require 'footer.php';
?>