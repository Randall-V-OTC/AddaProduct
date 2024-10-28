<?php
    //  include "models/product_db.php";
    
    $aryProducts = getProducts();
    //print_r($aryProducts);
    foreach($aryProducts as $aryProd)
    {
        echo "<a href='?id=$aryProd[productID]'>$aryProd[productCode]</a>$aryProd[productName]<br>";
        //echo "<a href=\'?id=$aryProd[productID]\'>Prod</a>  Name<br>";
        //echo "$aryProd[productID]";
        //print_r($aryProd['productID']);
        var_dump($aryProd);
        print_r($aryProd[0]);
    }
?>