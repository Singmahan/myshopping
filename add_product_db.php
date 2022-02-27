<?php
session_start();
include('connectdb.php');

$pro_name = $_POST['pro_name'];
$pro_price = $_POST['pro_price'];
//    $pro_data = $_POST['pro_data'];

//img upload
$ext = pathinfo(basename($_FILES['pro_img']['name']), PATHINFO_EXTENSION);
$new_img_name = 'img_' . uniqid() . "." . $ext;
$img_path = "img/";
$upload_path = $img_path . $new_img_name;
$success = move_uploaded_file($_FILES['pro_img']['tmp_name'], $upload_path);

if ($success == FALSE) {
    echo "ไม่สามารถ UPLOAD ได้";
    exit();
}

$pro_img = $new_img_name;

$q = "INSERT INTO tb_product (pro_name,pro_price,pro_img)
         VALUES ('$pro_name','$pro_price','$pro_img')";
$result = mysqli_query($conn, $q);

if ($result) {
    $_SESSION['status'] = "เพิ่มสินค้าสำเร็จ !";
    header("Location: show_product.php");
} else {

    $_SESSION['status'] = "เพิ่มสินไม่ค้าสำเร็จ";
    header("Location: show_product.php");
}
mysqli_close($conn);
