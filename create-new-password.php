<?php
require "header.php"
?>
   <title>Reset Password | Creativity Without Frontiers</title>
 <div class="header2">
     
	<h2>Reset Your Password</h2>

</div>
<?php 
$selector = $_GET["selector"];
$validator = $_GET["validator"];

if(empty($selector) || empty($validator)){
    echo "<p class='errorreset'>Could not validate your request!</p>";
}
else {
    if(ctype_xdigit($selector)!== false && ctype_xdigit($validator)!== false){
        ?>
        <form method="post" action="includes/reset-password.inc.php">
            <input type="hidden" name="selector" value="<?php echo $selector ?>"
             <input type="hidden" name="validator" value="<?php echo $validator ?>"
             	<div class="input-group">
             	<label>Enter a new password</label>
<input type="password" name="pwd" placeholder="...">
</div>
        	<div class="input-group">
             	<label>Repeat the new password</label>
<input type="password" name="pwd-repeat" placeholder="...">
</div>
	<div class="input-group">
		<button type="submit" class="btn" name="reset-password-submit">Reset your password</button>
	</div>
</form>        
        <?php
    }
}
?>




        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


<?php
require "footer.php" 
?>