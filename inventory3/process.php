<?php
    include "conn.php";

    if(isset($_POST['add_product'])){
        $product_name = $_POST['pn'];
        $description = $_POST['desc'];
        $price = $_POST['pr'];
        $quantity = $_POST['qt'];
        $date = $_POST['dt'];
        $posted_by = $_POST['pb'];

        //this code is for insert data in db

        $statement = mysqli_query($conn, "INSERT INTO products
                        VALUES('0','$product_name', '$description', '$price', '$quantity', '$date', '$posted_by')");  

        if($statement == true){
            ?>
            <script>
                alert("Data is Inserted Successfully!");
                window.location.href="list_products.php"
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Error Inserting...");
                window.location.href="list_products.php"
            </script>
            <?php
        }

                  
    }


    if(isset($_POST['update_product'])){
        $product_name = $_POST['pn'];
        $description = $_POST['desc'];
        $price = $_POST['pr'];
        $quantity = $_POST['qt'];
        $id = $_GET['id'];


        $statement = mysqli_query($conn, "UPDATE products 
        SET product_name='$product_name',description='$description',price='$price',
        quantity='$quantity' WHERE id='$id'");  

        if($statement == true){
            ?>
            <script>
                alert("Data is Updated Successfully!");
                window.location.href="list_products.php"
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Error updating...");
                window.location.href="update.php"
            </script>
            <?php
        }

                  
    }

?>



