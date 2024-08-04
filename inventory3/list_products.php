<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
</head>
<body>
    <a href="add_products.php">Add Products</a>
    <a href="list_products.php">View Products</a>
    <center>
        <h1>List of Products</h1>
        <table border="4px solid" style="border-color: brown;">
            <tr>
                <th>&nbsp;PRODUCT NAME&nbsp;</th> 
                <th>&nbsp;DESCRIPTION&nbsp;</th>
                <TH>&nbsp;PRICE&nbsp;</TH>
                <TH>&nbsp;QUANTITY&nbsp;</TH>
                <TH>&nbsp;DATE&nbsp;</TH>
                <TH>&nbsp;POSTED BY&nbsp;</TH>
                <th>ACTION 1</th>
                <th>ACTION 2</th>
            </tr>
    
        

    <?php
        include "conn.php";

        //this code gets the data
        $get_data = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_array(($get_data))){
            ?>
                <tr>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td><?php echo $row['Date'] ?></td>
                    <td><?php echo $row['posted_by'] ?></td>
                    <td> <a href="update.php?id=<?php echo $row['id'];?>"> UPDATE </a></td>
                    <td> <a href="delete.php?id=<?php echo $row['id'];?>"> DELETE </a></td>
                </tr>

                <?php
        }
        
        ?>
        </table>
    </center>
</body>
</html>