<?php

    $dsn = "mysql:host=localhost;dbname=my_guitar_shop2";
    $username = "root";
    $password = "";

    try {
        $db = new PDO($dsn, $username, $password);
        //echo("Connected to database");
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo("Error connecting to database: $error_message");
        exit();
    }

    $qry = "SELECT * FROM customers, addresses WHERE customers.customerID = addresses.customerID;";

    $result = $db->query($qry);

    print_r($result);

    $arrayCustomers = $result->fetchall();

    print_r($arrayCustomers);

    foreach ($arrayCustomers as $cust) {
        echo("Customer name: $cust[firstName] $cust[lastName]<br>");
    }