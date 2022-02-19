<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>File Upload Validation</title>
</head>
<body>
      <fieldset>
        
          <legend>PROFILE PICTURE</legend>

          <form action="FileUpload.php" method="post" enctype="multipart/form-data">
            <table>
                  <tr>  
                      <td><img src="images/upload sample.png" width="300" height="200" ></td></tr>
                  <tr>
                      <td><input type="file" name="fileToUpload" value="Choose a file"></td></tr> 
            </table>
              <hr>
                <input type="submit" value="Upload Image" name="submit">
          </form>

      </fieldset>
</body>
</html>