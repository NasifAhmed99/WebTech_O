<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Profile Picture</title>
</head>
<style type='text/css'>
  </style> 
  
<style>
  .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: left;
} 
  .column {
  float: left;
  width: 35%;
  padding: 10px;
  height: 220px; 
}
fieldset
{
    width: 169%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}
.column1 {
  float: right;
  width: 50%;
  padding: 3px;
  height: 220px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 332px;
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
        
          <legend>PROFILE PICTURE</legend>

          <form action="FileUpload.php" method="post" enctype="multipart/form-data">
            <table>
                  <tr>  
                      <td><img src="image/upload sample.png" width="300" height="200" ></td></tr>
                  <tr>
                      <td><input type="file" name="fileToUpload" value="Choose a file"></td></tr> 
            </table>
              <hr>
                <input type="submit" value="Upload Image" name="submit">
          </form>

      </fieldset>
</div>
</div>
<br><br><br><br><br>
</div>

<div class="menu">
<?php include '../Home page/footer.php';?>
</div>

</fieldset>  
</body>
</html>