<?php
require "header.php"
?>
   <title>Reset Password | Creativity Without Frontiers</title>
 <div class="header2">
	<h2>Reset Your Password</h2>

</div>
<form method="post" action="includes/reset-request.inc.php">
	<div class="input-group">
		<label>An e-mail will be sent to you with instructions on how to reset your password.</label>
<input type="text" name="email" placeholder="Enter your e-mail adress...">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="reset-request-submit">Receive new password by e-mail</button>
	</div>
</form>
<?php
if(isset($_GET["reset"])){
    if($_GET["reset"] == "success") {
        echo '<p> Check your e-mail!</p>';
    }
}

?>
        <br>
        <br>
        <br>
        


<?php
require "footer.php" 
?>