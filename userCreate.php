<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class) {
  require('include/' . strtolower($class) . '.class.php');
}

if (isset($_POST['btnsubmit'])) {
  if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
    $user_obj = new user();
    $users = $user_obj->createUser($_POST['fname'], $_POST['lname'], $_POST['address'], $_POST['phone'], $_POST['email']);  
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CRUD with PHP</title>
    <script type="text/javascript" src="public/script/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h2 class="text-center">Welcome to user management CRUD system</h2>
        <p><a href="index.php">List user</a></p>
        <form class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2">First name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="fname" placeholder="Enter first name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Last name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="lname" placeholder="Enter last name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="address" placeholder="Enter address" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Phone no:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="phone" placeholder="Enter phone no." required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

