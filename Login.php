<?php
require "header.php"
?>
   <title>Login | Creativity Without Frontiers</title>


 <div class="header2">
	<h2>Login</h2>
		<?php 
	if(isset($_GET['error'])){
	    if($_GET['error'] == "emptyfields") {
	        echo '<p class="errortext"> Error! Fill in all the fields! </p>';
	    }
	    
	    if($_GET['error'] == "wrongpwd") {
	        echo '<p class="errortext"> Error! Wrong password! </p>';
	    }
	      if($_GET['error'] == "nouser") {
	        echo '<p class="errortext"> Error! There is no account created with this username! </p>';
	    }
	}
	    ?>
</div>
<form action="includes/login.inc.php" method="post">
	<div class="input-group">
		<label>Username</label>
	 <input type="text" name="mailuid">
	</div>

	<div class="input-group">
		<label>Password</label>
	 <input type="password" name="pwd">
	</div>
	<div class="input-group">
		  <button type="submit" name="login-submit" class="btn">Login</button>
		  <?php 
		  if(isset($_GET["newpwd"])){
		      if($_GET["newpwd"] == "passwordupdated") {
		          echo "<p class='resetsuccess'> Your password has been reset </p> "; 
		      }
		  }
		  
		  ?>
		  <label><a href="reset-password.php">     Forgot your password?</a></label>
	</div>
</form>

<br>
<br>
<br>
<br>
<br>
        


<?php
require "footer.php";
?>