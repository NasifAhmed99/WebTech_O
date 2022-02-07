<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Validation Form</title>
	<style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>
	<?php

// define variables and set to empty values
	$nameErr = $emailErr = $dayErr = $monthErr = $yearErr = $genderErr = $degreeErr = $blood_groupErr = "";
    $name = $email = $day = $month = $year = $gender = $degree = $blood_group = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


		// Name Validation
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		}
		else{
			$name = $_POST["name"];

			if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
				$nameErr = "Only letters and white space allowed";
			}
			else if (str_word_count($_POST["name"])<2) {
				$nameErr = "Name must contain at least 2 word";
			}
		}	


		// Email Validation
		if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			}	
		else{
			$email = $_POST["email"];
			$pattern = "/@gmail.com/";
			$a = preg_match($pattern,$email);
				if (!$a==1) {
					$emailErr = "Invalid email format";
				}
		}


		// Date of Birth Validation
		if(empty($_POST["day"])) {
			$dayErr = "Day can not be empty";
		}
		else{
			$day = $_POST["day"];
				if ($day>31 || $day<1) {
					$dayErr = "Invalid day format";
				}
			}

		if(empty($_POST["month"])) {
			$monthErr = "month can not be empty";
		}

		else{
			$month = $_POST["month"];
				if ($month>12 || $month<1) {
					$monthErr = "Invalid month format";
				}
			}

		if(empty($_POST["year"])) {
			$yearErr = "year can not be empty";
		}

		else{
			$year = $_POST["year"];
				if ($year>1998 || $year<1953) {
					$yearErr = "Invalid year format";
				}
			}


		// Gender Validation
		if(empty($_POST["gender"])) {
			$genderErr = "Gender can not be empty";
		}
		else{
			$gender = $_POST["gender"];
		}


		// Degree Validation
		if(empty($_POST["degree"])) {
			$degreeErr = "Degree should be checked";
		}
		else{
			$degree = $_POST["degree"];
		}


		// Blood Group Validation
		if(empty($_POST["blood_group"])) {
			$blood_groupErr = "Blood Group must be selected";
		}
		else{
			$blood_group = $_POST["blood_group"];
		}
	}

	?>



	<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<div>
		 	 <fieldset>
		  		<legend><b>NAME</b></legend>
		  		<input type="text" id="name" name="name" value="<?php echo $name; ?>"><span class="red">*<?php echo $nameErr ?></span>
		  		<hr><br><br>
		  	</fieldset>
		</div>
		<div>
			<fieldset>
		  		<legend><b>EMAIL</b></legend>
		  		<input type="email" id="email" name="email" value="<?php echo $email; ?>"><span class="red">*<?php echo $emailErr ?></span>
		  		<hr><br><br>
		  	</fieldset>
		</div>
		<div>
			<fieldset>
		  		<legend><b>DATE OF BIRTH</b></legend>
		  		<table>
		  			<tr>
		  				<td>
		  					dd
		  				</td>
		  				<td>
		  					mm
		  				</td>
		  				<td>
		  					yyyy
		  				</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					<input type="number" id="day" name="day" value="<?php echo $day; ?>"><span class="red">*<?php echo $dayErr ?></span>/
		  				</td>
		  				<td>
		  					<input type="number" id="month" name="month" value="<?php echo $month; ?>"><span class="red">*<?php echo $monthErr ?></span>/
		  				</td>
		  				<td>
		  					<input type="number" id="year" name="year" value="<?php echo $year; ?>"><span class="red">*<?php echo $yearErr ?></span>
		  				</td>
		  			</tr>
		  		</table>
		  		<hr><br><br>
		  	</fieldset>
		</div>
		<div>
			<fieldset>
		  		<legend><b>GENDER</b></legend>
		  		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked";?> value="male"> Male
	    		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked";?> value="female"> Female
	    		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked";?> value="other"> Other <span class="red">*<?php echo $genderErr ?></span><br>
		  		<hr><br><br>
		  	</fieldset>
		</div>
		<div>
			<fieldset>
		  		<legend><b>DEGREE</b></legend>
		  		<input type="checkbox" name="SSC">
				<label for="checkbox">SSC</label>
				<input type="checkbox" name="HSC">
				<label for="checkbox">HSC</label>
				<input type="checkbox" name="SSC">
				<label for="checkbox">BSc</label>
				<input type="checkbox" name="SSC">
				<label for="checkbox">MSc</label><span class="red">*<?php echo $degreeErr ?></span>
		  		<hr><br><br>
		  	</fieldset>
		</div>
		<div>
			<fieldset>
				<legend><b>BLOOD GROUP</b></legend>
				<select id="BLOOD GROUP" name="blood_group">
				<option value="null"></option>
                <option value="ab+">AB+</option>
                <option value="ab-">AB-</option>
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>
                </select><span class="red">*<?php echo $blood_groupErr ?></span>
                <hr><br>
                <input type="submit" value="submit">
			</fieldset>
		</div>
	</form>
</body>
</html>