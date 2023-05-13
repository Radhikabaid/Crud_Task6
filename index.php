<?php

include "config.php";
if(isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password= $_POST['password'];


    $sql="INSERT INTO crud(Name,Phone,Email,Password) VALUES('$name','$email','$phone','$password')";
    if(mysqli_query($conn , $sql))
    {
        echo "Record created successfully";
    }
    else{
        echo "Error";
    }
   
}

?>

<!DOCTYPE html>
<html lang="'en">
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
 </head>
 <body>
    <div class="forms">
        <h3>Registration Page</h3>
    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text" name="Name"><br>
        <label for="">Email</label>
        <input type="Email" name= "email"><br>
        <label for="">Phone</label>
        <input type="number" name="phone"><br>
        <label for="">Password</label>
        <input type="password" name= "password"><br>
        <input type="submit" name ="submit" value ="Submit">
    </form>
</div>
 </body>
</html>
