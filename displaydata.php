<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaystyle.css">
    <title>Members List</title>
</head>

<body>

    <h1>List of Members</h1>

    <table border="2" class="flat-table">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <br>
        <br>
        <a href="index.html">Create Account</a>

        <?php

        include "databasecon.php"; // Using database connection file here



        //  $connect = mysqli_connect('127.0.0.1', 'root', '', 'homework'); //forgot to add DB so wasn't working... 

        //   $query = 'SELECT ID,Username,Email,Password FROM members';
        //   $result = mysqli_query($connect, $query);

        // echo mysqli_num_rows($result); TO TEST IF IT WORKED

        //  Creating Table for data

        $query = 'SELECT ID,Username,Email,Password FROM members';
        $result = mysqli_query($connect, $query);




        // While loop to fetch next record and convert it to an array
        // set the rows to match the database variables



        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['Username'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Password'] ?></td>
            <td><a href="edit.php?ID=<?php echo $row['ID'] ?>">Edit</a></td>
            <td><a href="delete.php?ID=<?php echo $row['ID'] ?>">Delete</a></td>
        </tr>

        <?php
        }
        ?>
    </table>




</body>

</html>