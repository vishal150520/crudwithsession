<?php


session_start();
?>
<form action="welcome.php" method="post" >  
  <label> id </label>         
  <input type="text" name="id" size="15" value="<?php echo $_SESSION["id"]?>"/> <br> <br> 
  <label> Firstname </label>         
  <input type="text" name="firstname" size="15" value="<?php echo $_SESSION["fname"]?>"/> <br> <br>  
  <label> Middlename: </label>     
  <input type="text" name="middlename" size="15" value="<?php echo $_SESSION["mname"]?>"/> <br> <br>  
  <label> Lastname: </label>         
  <input type="text" name="lastname" size="15" value="<?php echo $_SESSION["lname"]?>"/> <br> <br>  
    
  
  
    
  Email:  
  <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"]?>"/> <br>    
  <br> <br>  
   
   
  <input type="submit" value="Submit"/>  
  <a href="welcome.php">Create</a>
  </form>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
         border: 1px solid black;
         } 
    </style>
</head>
<body>
<table>
  <tr>
    <th>id</th>
    <th>FirstName</th>
    <th>MiddleName</th>
    <th>LastName</th>
    <th>Mail</th>
    <th>Action</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION["id"]."<br>"; ?></td>
    <td><?php echo $_SESSION["fname"]."<br>"; ?></td>
    <td><?php echo $_SESSION["mname"]."<br>"; ?></td>
    <td><?php echo $_SESSION["lname"]."<br>"; ?></td>
    <td><?php echo $_SESSION["email"]."<br>"; ?></td>
    <td><a href="update.php">Update</a> &nbsp; <a href="">Delete</a></td>
  </tr>

</table>
</body>
</html>
