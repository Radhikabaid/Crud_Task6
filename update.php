<?php

include "config.php";


if(isset($_POST['update']))
{
    $uid;

    if(isset($_GET['ID'])){
        $uid = $_GET['ID'];
    }

    $name = $_POST['Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password= $_POST['password'];

    $sql="UPDATE crud SET Name='$name', Phone='$phone', Email='$email', Password='$password' WHERE ID='$uid'";

    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo"Error";
    }
    else{
        echo"success";
    }
    header("Location:read.php");
    exit;
}

?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div style="width :30%; margin:auto;margin-top:100px; background-color:rgb(111, 128, 169); padding:25px; border-radius:8px;box-shadow: 10px 5px 5px">
        <form action="" class="form-group" method ="POST"> 
        <label for="">Name</label>
                <input type="text" name="Name" class="form-control"><br>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control"><br>
                <label for="">Phone</label>
                <input type="number" name="phone" class="form-control"><br>
                <label for="">Password</label>
                <input type="password" name="password" class="form-control"><br>
                <input type="submit" name="update" value="UPDATE" style="box-shadow: 2px 1px 1px">
        </form>
        </div>
    </body>
</html>