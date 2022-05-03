<?php

$connect = mysqli_connect('127.0.0.1', 'root', '', 'homework'); //forgot to add DB so wasn't working... 

$query = 'SELECT ID,Username,Email,Password FROM members';
$result = mysqli_query($connect, $query);

     //TO TEST IF IT WORKED