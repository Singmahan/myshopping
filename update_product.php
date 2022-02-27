<?php
session_start();
include('connectdb.php');

if (isset($_POST['update_btn'])) {
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_img = $_FILES['pro_img']['name'];
    $pro_img_temp = $_FILES['pro_img']['tmp_name'];

    $q = "UPDATE tb_product SET pro_name='$pro_name',pro_price='$pro_price' WHERE pro_id='$pro_id'";
    $result = mysqli_query($conn, $q);

    // อันนี้แก้ไขตรงส่วนของรูปภาพ
    if ($_FILES["pro_img"]["name"] != "") {
        if (move_uploaded_file($_FILES["pro_img"]["tmp_name"], "img/" . $_FILES["pro_img"]["name"])) {

            // ลบไฟล์เก่าออก
            @unlink("img/" . $_POST["old_file1"]);

            // แทนที่ด้วยไฟล์ใหม่
            $strSQL = "UPDATE tb_product SET pro_img = '" . $_FILES["pro_img"]["name"] . "'
            WHERE pro_id = '" . $pro_id . "'";

            $result = mysqli_query($conn, $strSQL);
        }
    }
    if ($result) {
        $_SESSION['status'] = "อัพเดทสินค้าสำเร็จ !";
        header("Location: show_product.php");
    } else {
        $_SESSION['status'] = "อัพเดทสินค้าไม่สำเร็จ";
        header("Location: show_product.php");
    }
}
