<?php
        //You have to fill in this information to connect to your database!
        $conn = mysqli_connect('localhost', 'galaxy', 'GBz9612R4jMwJN4i') or die('Failed to connect: ' . mysqli_error());
        mysqli_select_db($conn, 'galaxy') or die('Failed to access database');
?>
