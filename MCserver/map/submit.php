<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./theme.css">
	<style>
		#login {
			height: 15em;
			width: 40em;
			background-color: #808080;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			text-align: center;
			padding-top: 5em;
		}
		#form {
			height: 16em;
			width: 26em;
			background-color: #808080;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			padding: 2em;
		}
		input[name="name"] {
			height: 1.5em;
			width: 15em;
		}
		input[name="x"] {
			height: 1.5em;
			width: 6em;
		}
		input[name="z"] {
			height: 1.5em;
			width: 6em;
		}
		textarea[name="desc"] {
			height: 20em;
			width: 30em;
			resize: none;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_SESSION['user'])) {
			if(isset($_POST['name'])) {
				require 'db.php';
				$sql="INSERT INTO `mcstuff`.`mappoints` (`id`,`user`,`name`,`desc`,`x`,`z`) VALUES ('0','".$_SESSION['user']."','".$_POST['name']."','".$_POST['desc']."','".$_POST['x']."','".$_POST['z']."');";
				mysqli_query($conn,$sql);
			}
			require 'form.php';
		}
		elseif(isset($_POST['username'])) {
			$url = "https://authserver.mojang.com/authenticate";
			$data = array();
			$data['agent'] = array("name" => "Minecraft", "version" => 1);
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$options = array(
				'http' => array(
					'header' => "Content-type: application/json",
					'method' => 'POST',
					'content' => json_encode($data),
				),
			);
			$context = stream_context_create($options);
			$result = json_decode(file_get_contents($url, false, $context));
			if($result==false) {
				echo '<div id="login">
		<p>You will need to login with your minecraft account:</p>
		<form method="POST">
			<input type="text" name="username" value="" required="" autocomplete="username" placeholder="Email/Username">
			<input type="password" name="password" required="" autocomplete="current-password" placeholder="Password">
			<input type="submit" value="Login">
		</form>
	</div>';
				echo '<script>alert("Invalid Login")</script>';
			}
			else {
				$profile = $result->selectedProfile;
				$allowedUsers=["redstonetardis42","petrok9001","skinz123","list","kagetora0","thedragonslain","luckyknight68","1999sam1999","greenhouscreeper","enddragon9","lewisthekiller","gentleworks","antraveler","153norc","lightningpwr28","sugargizmo","silverleafnight","pharaohcrab","patientneutral","enderninja7","drn21","d_hex","aquatailz"];
				if(in_array(strtolower($profile->name), $allowedUsers)) {
					$_SESSION['user']=strtolower($profile->name);
					require 'db.php';
					require 'form.php';
				}
				else {
					echo '<div id="login">
		<p>You will need to login with your minecraft account:</p>
		<form method="POST">
			<input type="text" name="username" value="" required="" autocomplete="username" placeholder="Email/Username">
			<input type="password" name="password" required="" autocomplete="current-password" placeholder="Password">
			<input type="submit" value="Login">
		</form>
	</div>';
					echo '<script>alert("That user is not allowed to submit map locations.")</script>';
				}
			}
		}
		else {
			echo '<div id="login">
		<p>You will need to login with your minecraft account:</p>
		<form method="POST">
			<input type="text" name="username" value="" required="" autocomplete="username" placeholder="Email/Username">
			<input type="password" name="password" required="" autocomplete="current-password" placeholder="Password">
			<input type="submit" value="Login">
		</form>
	</div>';
		}
	?>
</body>
</html>