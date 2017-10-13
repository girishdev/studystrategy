<?php
	session_start();
	$db = new mysqli('127.0.0.1','root','root','studytest');
	// $db = new mysqli('212.1.210.1','tetsi202_DBname','girish618642','tetsi202_study');
	if($db->connect_errno){
		echo 'Error';
		die();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Study strategies</title>
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" language="javascript">
			$(document).ready(function(){
				// alert('Hi...');
				// $("#login_form").reset();
				// apt-get install -f
				// $('#login_form').children('input').val('');
			});
		</script>
</head>
<body>

	<div class="container-fluid">

		<div class="panel-body">
			<div class="form_content col-md-4 col-md-offset-4">
				<form id="login_form" method="POST" >
					<div class="form-group">
						<label for="url">E mail: </label>
						<input type="text" class="form-control" name="login_id" id="login_id" autocomplete="off" placeholder="E_mail">
					</div>
					<div class="form-group">
						<label for="password">Password: </label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="submit" class="form-control" name="submit" id="submit">
					</div>
				</form>
				<?php

					if(isset($_POST['submit']) && !empty($_POST['login_id']) && !empty($_POST['password'])) {

						$login_id = $_POST['login_id'];
						$login_pass = $_POST['password'];
						$Date_Stamp=date("d.m.Y");
						$Time_Stamp=date("H:i:s");

						$db_login_id = '';
						$db_login_pass = '';
						$select = $db->query("SELECT login_id,password FROM login_form WHERE login_id='$login_id'");
						if($select){
							$num_rows = $select->num_rows;
							while($rows = $select->fetch_object()){
								$db_login_id = $rows->login_id;
								$db_login_pass = $rows->password;
							}

							if($login_id == $db_login_id && $login_pass == $db_login_pass){
								echo '<h1>You Are Loged In Successfully...</h1>';
								header("Location: main_page.php");
							} else {
								echo '<h1>Login Failed Login Detail\'s Incorrect</h1>';
							}

						} else {
							echo 'Login Failed Login Detail Not Found In Database';
						}

					} elseif(isset($_POST['submit']) && empty($_POST['login_id']) && empty($_POST['password'])) {
						echo 'Please Provide Proper Login Details...';
					}/**/

				?>
			</div>
		</div>

	</div>

</body>
</html>