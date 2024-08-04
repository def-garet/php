<?php 
    include "conn.php";
    $id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM products WHERE id = '$id'");

    if($delete==true){
        ?>
        <script>
            alert("Data is deleted Successfully!");
            window.location.href="list_products.php"
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data is not deleted");
            window.location.href="list_products.php"
        </script>
        <?php
    }

?>