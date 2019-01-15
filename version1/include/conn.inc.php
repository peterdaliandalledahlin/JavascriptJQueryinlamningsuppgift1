<?php

    $hostname = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbDatabase = "javascriptjqueryinlamningsuppgift1";

    // Skapar uppkopplingen
    $conn = new mysqli($hostname, $dbUser, $dbPassword, $dbDatabase);
    $conn->set_charset("utf8");
    // Kollar uppkopplingen
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>