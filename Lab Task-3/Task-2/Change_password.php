<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Changing Validation</title>
</head>
<body>
		<?php
		$set_up_password = "nasifahmed99"; 
		$current_password = $new_password = $retype_new_password = "";
		$current_password_Err = $new_password_Err = $retype_new_password_Err = $password_mismatched_Err = $same_previous_password_Err = "";  

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';




		//Current password validation
			if (!isset($_POST['current_password']) || empty($_POST['current_password'])) {
				$current_password_Err = "This field can not be empty";
			}
			else{
				$current_password = $_POST['current_password'];
				
				//Set up password matching
				if ($set_up_password !== $current_password) {
					$current_password_Err = "Old password mismatched";
				}
			}




		//New password validation
			if (!isset($_POST['new_password']) || empty($_POST['new_password'])) {
				$new_password_Err = "This field can not be empty";
			}
			else{
				$new_password = $_POST['new_password'];
				
				//Checking if new password is same as previous one
					if ($new_password == $current_password) {
						$same_previous_password_Err = "New password can not be same as previous password";
					}
			}



		//Re-type password validation
			if (!isset($_POST['re_new_password']) || empty($_POST['retype_new_password'])) {
				$retype_new_password_Err = "This field can not be empty";
			}
			else{
				$retyper_new_password = $_POST['retype_new_password'];
				
				//Checking new password matching
				if ($new_password !== $retype_new_password) {
					$password_mismatched_Err = "New password mismatched";
				}
			}
		}
	?>




	<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<fieldset>
				<legend><b>CHANGE PASSWORD</b></legend>
				<table>
					<tr>
						<td>Current Password</td>
						<td>:</td>
						<td><input type="text" name="current_password" value="<?php echo $current_password; ?>"></td>
						<td><?php echo $current_password_Err; ?></td>
						<td></td>
					</tr>
					<tr>
						<td style="color: green;">New Password</td>
						<td>:</td>
						<td><input type="text" name="new_password" value="<?php echo $new_password; ?>"></td>
						<td><?php echo $new_password_Err; ?></td>
						<td><?php echo $same_previous_password_Err; ?></td>
						
					</tr>
					<tr>
						<td style="color: red;">Retype New Password</td>
						<td>:</td>
						<td><input type="text" name="retype_new_password" value="<?php echo $retype_new_password; ?>"></td>
						<td><?php echo $retype_new_password_Err; ?></td>
						<td><?php echo $password_mismatched_Err; ?></td>
					</tr>
				</table>
				<br>
				
				<hr>
				<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>
</body>
</html>