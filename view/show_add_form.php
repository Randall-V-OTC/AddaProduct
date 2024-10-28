<?php

    $productID = "";
    $productName = "";
    $listPrice = "";
    if ($id) {
        //echo($id);
        $prod = getProduct($id);
        //print_r($prod);

        $productID = htmlspecialchars($prod['productID']);
        $productName = htmlspecialchars($prod['productName']);
        $listPrice = htmlspecialchars($prod['listPrice']);

    }
    $actionValue = $id ? 'save_changes' : 'save_product';
    $heading = $id ? "Edit $productName" : "Add A Product";

?>

<h1><?= $heading ?></h1>

    <form action="." method="post" class="addForm">
        <label for="id">Id:</label>
        <input readonly type="text" name="id" id="id" value="<?=$productID?>">
        <br>

        <label for="product">Product</label>
        <input type="text" name="product" value="<?=$productName?>">
        <br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="<?=$listPrice?>">
        <br>

        <input type="submit" value="Submit This">
        <input type="hidden" name="action" value="<?=$actionValue?>">
    

    </form>