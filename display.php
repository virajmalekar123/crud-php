<?php   
include 'conn.php';



  $my_query = "select * from users";
  $query = mysqli_query($conn,$my_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class=" col-lg-12">
<h1 class="text-danger text-center mb-5"> Display Table Data</h1>
<table class=" table table-striped table-hover table-bordered">


<tr class= "bg-dark text-white">
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Role</th>
    <th>Action</th>

</tr>

<?php
include 'conn.php';

  $my_query = "select * from users WHERE is_active=1";
  $query = mysqli_query($conn,$my_query);

  while($res = mysqli_fetch_array($query)){

?>
<tr class ="text-center">
    <td><?php echo $res['id'] ?></td>
    <td><?php echo $res['username'] ?></td>
    <td><?php echo $res['password'] ?></td>
    <td><?php echo $res['role'] ?></td>
    <td><button class ="btn-danger btn"><a href = "delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button>
    <button class ="btn-primary btn"><a href = "update.php?id=<?php echo $res['id'];?>" class="text-white">Update </a></button></td>
  
  

</tr>
<?php  
  }

?>
</table>

</div>
</div>   
    
</body>
</html>