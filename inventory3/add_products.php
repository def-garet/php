<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
    <a href="add_products.php">Add Products</a>
    <a href="list_products.php">View Products</a>
    <h1>Add Products</h1>

    <form action="process.php" method="POST">
        <label>Product Name</label> <br>
        <input type="text" name="pn" required> </p>

        <label>Description</label> <br>
        <input type="text" name="desc" required> </p>

        <label>Price</label> <br>
        <input type="text" name="pr" required> </p>

        <label>Quantity</label> <br>
        <input type="number" name="qt" required> </p>

        <label>Date</label> <br>
        <input type="date" name="dt" required> </p>

        <label>Posted By</label> <br>
        <input type="text" name="pb" required> </p>

        <input type="submit" name="add_product" value="ADD">
    </form>
</body>
</html>