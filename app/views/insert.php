<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>Insert Product</h1>
    <form action="<?php echo site_url('Product/add_product'); ?>" method="post">
        <input type="text" name="product_name">
        <input type="text" name="product_quantity">
        <input type="submit" name="add_product" value="add product">
</form>
</body>
</html>