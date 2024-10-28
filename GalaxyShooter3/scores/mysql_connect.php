<?php
        //You have to fill in this information to connect to your database!
        $conn = mysqli_connect('localhost', 'techhptz_techhptz', 'PdN7u4sspuQi') or die('Failed to connect: ' . mysqli_error());
        mysqli_select_db($conn, 'techhptz_galaxy') or die('Failed to access database');
?>
