<?php 
    include "conn.php";
    $id = $_GET['id'];
    $get_data_to_update = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");

    while($row= mysqli_fetch_object($get_data_to_update)){
        $pn = $row -> product_name;
        $desc = $row -> description;
        $price = $row -> price;
        $qt = $row -> quantity;

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>

    <a href="list_products.php">Back to products</a>
    <h1>Update Products</h1>
    <form action="process.php?id=<?php echo $id?>" method="POST">
        <label>Product Name</label> <br>
        <input type="text" name="pn" required value="<?php echo $pn;?>"> </p>

        <label>Description</label> <br>
        <input type="text" name="desc" required value="<?php echo $desc;?>"> </p>

        <label>Price</label> <br>
        <input type="text" name="pr" required value="<?php echo $price;?>"> </p>

        <label>Quantity</label> <br>
        <input type="number" name="qt" required value="<?php echo $qt;?>"> </p>

        <input type="submit" name="update_product" value="Update">
    </form>
</body>
</html>