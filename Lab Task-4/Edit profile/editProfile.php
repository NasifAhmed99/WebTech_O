<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Changing Validation</title>
</head>
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
	<style type='text/css'>
   .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: left;
} 
fieldset
{
    width: 169%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}

  .column {
  float: left;
  width: 35%;
  padding: 10px;
  height: 300px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 323px;
  position: absolute;
  left: 36%;
  margin-left: 0px;
  top: 102;
}

</style>
<body> 
  <div class="menu">
<?php include '../dashboard/header.php';?>
</div>
<div class="vl"></div>
<div class="myDiv">

<div class="row">

<div class="column"> 

<div id="links"> 
<h2>Account</h2><hr> 
<ul> 
<li><a href="http://localhost:81/html/Lab%20Task-4/Dashboard/dashboard.php"> Dashboard </a></li> 
<li><a href="http://localhost:81/html/Lab%20Task-4/View%20profile/viewProfile.php"> View Profile </a></li> 
<li><a href="http://localhost:81/html/Lab%20Task-4/Edit%20profile/editProfile.php"> Edit Profile </a></li> 
<li><a href="http://localhost:81/html/Lab%20Task-4/Profile%20picture/profilePicture.php"> Change Profile Picture </a></li> 
<li><a href="http://localhost:81/html/Lab%20Task-4/Change%20password/changePassword.php"> Change Password </a></li>
<li><a href="http://localhost:81/html/Lab%20Task-4/Login/login.php"> Log out </a></li>
</ul> 
</div> 
</div>

           <div class="column"> 

               <fieldset> 
                    <legend><b>EDIT PROFILE</b> </legend><br>
                    Name     :<input type="text" name="name" ><br><hr>  
                    Email    :<input type="email" name = "email" ><br><hr>
                    Gender   :
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><hr>
                   
                    Date of Birth:
                     <input type="date" name="dob"> <hr>
                    
                     
                     <input type="submit" name="submit" value="Submit" ><br>
                      </fieldset><br>
                    </div>
                </div>

</div>
<div class="menu">
<?php include '../Home page/footer.php';?>
</div> 
</body>
 </html> 