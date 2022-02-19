<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Validation</title>
	<style type="text/css">
		.red{
			color: red;
		}
	</style>
<body>

<?php
		$userName = $pass = "";
		$userName_Err = $pass_Err = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';



			//username validation
			if (!isset($_POST['user_name']) || empty($_POST['user_name'])) 
			{
				$userName_Err = "User Name is required";
			}
			else{
				$userName = $_POST['user_name'];
				if (!preg_match("/^[a-zA-z_0-9]*$/", $userName)) 
				{
					$userName_Err = "User Name can contain alpha numeric characters(a-z, A-Z, 0-9), period, dash(-) or underscore(_) only";
					}
				else if(strlen($userName) < 2)
				{
					$userName_Err = "User Name must contain at least 2 characters";
					}
				}




			//password validation
			if (!isset($_POST['password']) || empty($_POST['password'])) {
					$pass_Err = "Password is required";
				}
			else{
				$pass = $_POST['password'];

			//password length checking
			if (strlen($pass) < 8) {
					$pass_Err = "Password can not be less than eight (8) characters";
				}

			//password special character checking
			$special_pass_check_1 = preg_match("/@/", $pass);
			$special_pass_check_2 = preg_match("/$/", $pass);
			$special_pass_check_3 = preg_match("/#/", $pass);
			$special_pass_check_4 = preg_match("/%/", $pass);

	
			if($special_pass_check_1 == 0 || $special_pass_check_2 == 0 || $special_pass_check_3 == 0 || $special_pass_check_4 == 0) {
					$pass_Err = "Password must have at least one of these special characters @, $, #, %";
					
				}					
		
			}
				
		}

	?>
	<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
      <fieldset>
      	 <legend><b>LOGIN</b></legend>
         		<table>
					<tr>
						<td><label>User Name: </label></td>
						<td><input type="text" name="user_name" value="<?php echo $userName;?>"></td>
						<td><span class="red"><?php echo $userName_Err?></td></span>
					</tr>

					<tr>
						<td><label>Password: </label></td>
						<td><input type="text" name="password" value="<?php echo $pass;?>"></td>
						<td><span class="red"><?php echo $pass_Err?></td></span>
					</tr>
				</table><br>
		 
		 	<hr>
				<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
				<input type="submit" name="submit" value="Submit">
				<a href="https://www.w3schools.com/asp/met_websecurity_resetpassword.asp/">Forgot Password?</a>
      </fieldset>

</body>
</html>