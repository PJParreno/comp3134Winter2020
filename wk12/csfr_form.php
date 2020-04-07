<?php
session_start();
$myRand = rand(0,20);
$_SESSION["confirmation"] = $myRand;
?>

<form method="POST" action="csfr_action.php">
<input type="hidden" name ="username" value="host">
<input type="hidden" name ="password" value="pass">
<input type="hidden" name ="confirmation" value="<?php echo $_SESSION["confirmation"] ?>">

</form>
<script>
	document.forms[0].submit();
</script>