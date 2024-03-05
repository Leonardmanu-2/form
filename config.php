<?php
    
    //host
    $host = "localhost";

    //database name
    $dbname = "form_api";

    //user
    $username = "root";

    //password
    $password = "";

    //connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);

    // if ($conn == true) {
    //     echo "Working Fine";
    // } else {
    //     echo "Error";
    // }

?>