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

    // $qry = "SELECT * FROM customers, addresses WHERE customers.customerID = addresses.customerID;";

    // $result = $db->query($qry);

    function getProducts()
    {
        global $db;
        $query = "SELECT * FROM products;";
        // echo($query);
        $obj = $db->query($query);
        return $obj->fetch();

        // print_r($products);
        // return $products;
    }
    

    function getProduct($id)
    {

        global $db;
        $qry = "SELECT * FROM products WHERE products.productID = $id";
        //echo($qry);

        $obj = $db->query($qry);
        return $obj->fetch();
        
        // $aryProducts = getProducts();
        // // var_dump($aryProducts);
        // foreach($aryProducts as $oneProd)
        // {
        //     if ($oneProd[0] === $id)
        //     {
        //         return $oneProd;
        //     }
        // }
    }

    function addProducts($id, $name, $price)
    {
        if ($id === null || $name === null || $price === null) {
            // If any parameter is null, return false
            return false;
        }

        $qry = "INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `description`, `listPrice`, `discountPercent`, `dateAdded`) VALUES (NULL, '1', '$id', '$name', 'The coolest guitar on the planet', '$price', '0.00', '2024-10-21 16:40:44.000000');";

        //fclose($file);
        echo($qry);

        global $db;
        $db->query($qry);

        return true;
        
    }

    function saveChanges($id, $price, $prodName) {

        global $db;

        $sql_stmt = "UPDATE products SET productName = '$prodName', listPrice = '$price' WHERE products.productID = $id;";

        echo($sql_stmt);

    }

    
?>