<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
<form method="post" action="login.php">
      <img class="c926" src="http://globaldreamz.com/receipt/header.png" alt="GrapesJS." style="box-sizing: border-box; color: rgb(158, 83, 129); width: 100%; font-size: 50px;">
      <br>
      <br>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input class="form-control" id="username" name="username" type="text" value="" placeholder="Username">
              </div>
              <br>
              <div class="form-group">
                <label class="control-label" for="pwd">Password</label>
                <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
              </div>
              <br>
              <center>
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </center>
            </div>
          </div>
        </div>
      </div>
<br>
<br>
    <footer style="box-sizing: border-box; background-color: #033f77; width: 100%; height: 10%"></footer>
</form>

</body></html>
<?php
session_start();

$username = "admin";
$password = "admin";
if(isset($_POST["submit"]))
{

if(($_POST['username'] == $username) && ($_POST['password'] == $password))
{
   $_SESSION["loggedin"] = true;
   $URL="http://globaldreamz.com/receipt/test2.html";
   echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';}
else {
  echo "Invalid Username or Password";

}
}
?>
