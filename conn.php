<?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'junglebook';


        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('could not connect:' . mysqli_connect_error());
        }
        ?>