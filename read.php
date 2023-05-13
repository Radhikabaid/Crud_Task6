<?php

include "config.php";

$sql ="SELECT * FROM CRUD";
$result = mysqli_query($conn,$sql);
$numRows = mysqli_num_rows($result);


?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <h4>user information<h4>
        <table  class="table table-sm table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone no.</th>
                <th>Email</th>
                <th>password</th>
                <th>Action</th>
            </tr>
            <?php
            if($numRows!=0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                        <td><a class="btn btn-primary" href="Update.php?ID=<?php echo $row['ID'];?>">Update</a>
                        <a class="btn btn-secondary"name="Delete" href="delete.php?ID=<?php echo $row['ID'];?>">Delete</a>
                        </td>

                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </body>
</html>