<?php
require "header.php"
?>
   <title>Register | Creativity Without Frontiers</title>
 <div class="header2">
	<h2>Register</h2>
	<?php 
	if(isset($_GET['error'])){
	    if($_GET['error'] == "emptyfields") {
	        echo '<p class="errortext"> Error! Fill in all the fields! </p>';
	    }
	    else if($_GET['error'] == "invalidmailuid"){
	    echo '<p class="errortext"> Error! Invalid username and e-mail!</p>';
	    }
	     else if($_GET['error'] == "invalidmail"){
	    echo '<p class="errortext"> Error! Invalid e-mail!</p>';

	         
	     }
	      else if($_GET['error'] == "invaliduid"){
	    echo '<p class="errortext"> Error! Invalid username!</p>';

	         
	     }
	      else if($_GET['error'] == "passwordcheck"){
	    echo '<p class="errortext"> Error! Your passwords do not match!</p>';

	         
	     }
	     	      else if($_GET['error'] == "usertaken"){
	    echo '<p class="errortext"> Error! This username is already taken!</p>';
	}
	}	
	else if($_GET['signup'] == "success"){
	    echo '<p class="errortext">Sign-up successful!</p>';
	}
	?>
</div>
<form method="post" action="includes/signup.inc.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="uid">
	</div>
	<div class="input-group">
		<label>Email</label>
<input type="text" name="mail">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="pwd">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="pwd-repeat">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="signup-submit">Register</button>
	</div>
</form>

        <br>
        <br>
        <br>
        


<?php
require "footer.php" 
?>