<?php
    // $dbc = mysqli_connect('localhost','root','','helpertheme');
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $dbc = new PDO("mysql:host=$servername;dbname=helpertheme", $username, $password);
        // set the PDO error mode to exception
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    ?>