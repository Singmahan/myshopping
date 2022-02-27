<?php
     include('connectdb.php');

     $pro_id = $_GET['pro_id'];

     //delete img
     $qdel = "SELECT pro_img FROM tb_product WHERE pro_id='$pro_id'";
     $resdel = mysqli_query($conn, $qdel);
     $pro_img = mysqli_fetch_array($resdel, MYSQLI_NUM);
     $filename = $pro_img[0];
     @unlink('img/' .$filename);

     $q = "DELETE FROM tb_product WHERE pro_id='$pro_id'";
     $result = mysqli_query($conn, $q);

     if($result) {
        $_SESSION['status'] = "ลบสินค้าสำเร็จ !";
        header("Location: show_product.php");
     } else {

        $_SESSION['status'] = "ลบสินค้าไม่สำเร็จ !";
        header("Location: show_product.php");
     }
     mysqli_close($dbcon);
