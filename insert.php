<?php
include 'conn.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $my_query = "INSERT INTO `users`(`username`, `password`,`role`) VALUES (' $username','$password','$role') ";
  $query = mysqli_query($conn,$my_query);
  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <style>.error{color:red;}</style>
</head>
<body>
  <div class = "col-lg-6 m-auto">
  <form method="POST" name="registration">
     <br><br><div class = "card">
     <div class = "card-header bg-dark">
     <h1 class = "text-white text-center"> Insert Operation </h1>
     </div>
     <label>Username: </label>
     <input type="text" name="username" class="form-control"><br>
     <label>Password: </label>
     <input type="text" name="password" class = "form-control"><br>
     <select name="role" id="role" class="form-control">
      <option value="">Select Role</option>
      <option value="1">0-User</option>
      <option value="0">1-Admin</option>
     </select>
     <button class ="btn btn-success" type="submit" name = "submit">SUBMIT</button><br> 

  </form>
     <script src="vendor/jquery.validate.min.js"> </script>
     <script src="js/form_validation.js"></script>
</body>
</html>