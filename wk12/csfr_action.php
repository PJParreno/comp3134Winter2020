<h1>Login</h1>
<form method="post">
<label>Username</label>
<input type="text" name="username">
<br/>
<label>Password</label>
<input type="password" name="password">
<br/>
<input type="submit">
</form>

<?php 
session_start();

if($_POST["password"] == "pass" and $_POST["username"] == "host" and $_POST["confirmation"] == $_SESSION["confirmation"]){
?>
<div>success!</div>
<?php } else { ?>
<div>fail!</div>
<?php } ?>