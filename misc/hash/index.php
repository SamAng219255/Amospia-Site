<form method="POST">
<input name="pass" type=password>
<input type=submit>
</form>
<?php
	if(isset($_POST['pass'])) {
		echo password_hash($_POST['pass'],PASSWORD_DEFAULT);
	}
?>