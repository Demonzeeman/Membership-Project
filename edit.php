<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "databasecon.php"; // Using database connection file here

    $id = $_GET['ID']; // get id from query

    $qry = mysqli_query($connect, "SELECT * FROM members WHERE ID='$id'");

    $data = mysqli_fetch_array($qry); // fetching data, convert to array

    if (isset($_POST['update'])) // enable clicking on update/edit button
    {
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $edit = mysqli_query($connect, "UPDATE members SET Username='$username', Email='$email', Password='$password' WHERE ID='$id'");

        if ($edit) {
            mysqli_close($connect); // close the connection
            header("refresh:2; url=displaydata.php");
            exit;
        } else {
            echo "Error Editing Info";
        }
    }

    ?>

    <h3>Edit Member Details</h3>

    <form method="POST">
        <input type="text" name="Username" value="<?php echo $data['Username'] ?>" placeholder="Enter Username" Required>
        <input type="email" name="Email" value="<?php echo $data['Email'] ?>" placeholder="Enter Email" Required>
        <input type="password" name="Password" value="<?php echo $data['Password'] ?>" placeholder="Enter Password" Required>
        <input type="submit" name="update" value="Update">

    </form>


</body>

</html>