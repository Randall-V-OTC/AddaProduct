<?php

    echo("<a href='./?action=edit&id=$id'>Edit</a>");
    
    $oneProduct = getProduct($id);
    echo ("<h1>$oneProduct[productCode]</h1><p>$oneProduct[productName] $oneProduct[listPrice]");

?>

<div><a href="."> Show all Products</div>