<?php
    // PHP Data Objects(PDO) Sample Code:

    $password = "Teamofabio2016$.";

    try {
        $conn = new PDO("sqlsrv:server = tcp:dbsenati.database.windows.net,1433; Database = senati-db", "ncasafrancal", "$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "ncasafrancal", "pwd" => "$password", "Database" => "senati-db", "LoginTimeout" => 60, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:dbsenati.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
?>