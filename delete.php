<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete user</title>
</head>

<body>

    <?php

    include "databasecon.php"; // Using database connection file here

    $id = $_GET['ID']; // get id through query string

    $del = mysqli_query($connect, "DELETE FROM members WHERE id=$id"); // delete query

    if ($del) {
        mysqli_close($connect); // Close connection
        header("refresh:2; url=displaydata.php"); // redirects to database page
        exit;
    } else {
        echo "Error deleting record"; // display error message if not deleted
    }




    ?>


</body>

</html>