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

		.myDivcenter {
  border: 1px outset black;
  background-color: white;    
  text-align: center;
} 
	</style>
<body>

<?php
		$email = "";
		$email_Err= "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';


			//email validation
			if (!isset($_POST['email']) || empty($_POST['email'])) 
			{
				$email_Err = "email is required";
			}
			else{
				$email = $_POST['email'];
				}



	}		

	?>
	<div><?php include '../Home page/header.php';?></div> 
	<div class="myDivcenter">

	<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
      <fieldset>
      	 <legend><b>FORGOT PASSWORD</b></legend>
         		<table>
					<tr>
						<td><label>Enter Email: </label></td>
						<td><input type="email" name="email" value="<?php echo $email;?>"></td>
						<td><span class="red"><?php echo $email_Err?></td></span>
					</tr>

				</table><br>
		 
		 	<hr>
				
				<input type="submit" name="submit" value="Submit">
      </fieldset>
      </div>

      <div><?php include '../Home page/footer.php';?></div>

</body>
</html>