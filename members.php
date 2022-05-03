<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Accounts</title>
</head>

<body>
    <?php

    include "databasecon.php"; // Using database connection file here


    // $con = mysqli_connect('127.0.0.1', 'root', '',);
    //   if (!$con) {
    //echo 'Not connected to the server';
    //  }
    // added DB query here instead of before
    if (!mysqli_select_db($connect, 'homework')) {
        echo 'Database Not Selected';
    }

    $Username = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $sql = "INSERT INTO members (Username, Email, Password) VALUES ('$Username','$Email', '$Password')";

    if (!mysqli_query($connect, $sql)) {
        echo 'Not Inserted';
    } else {
        echo 'Account Added';
    }

    header("refresh:2; url=index.html");



    ?>
</body>

</html>