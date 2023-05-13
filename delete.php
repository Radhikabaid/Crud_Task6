<?php

include "config.php";

if(isset($_GET['ID']))
{
    $uid=$_GET['ID'];

    $sql="Delete from crud where ID ='$uid'";
    if($result = mysqli_query($conn,$sql))
    {
        echo "Success";
    }
    else
    {
        echo "Error";
    }
}

?>