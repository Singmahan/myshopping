<?php
session_start();
include('connectdb.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>แสดงรายการสินค้า</h3>
                    </div>
                    <div class="card-body">


                        <?php
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><?php echo $_SESSION['status']; ?></strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['status']);
                        }
                        ?>

                        <a href="add_product.php" class="btn btn-primary">+ เพิ่มสินค้า</a><br><br>

                        <?php
                        $q = "SELECT * FROM tb_product";
                        $result = mysqli_query($conn, $q);
                        if (mysqli_num_rows($result) > 0) { ?>

                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th class="text-center">ชื่อสินค้า</th>
                                        <th class="text-center">ราคา</th>
                                        <th class="text-center">วันที่</th>
                                        <th class="text-center">รูปภาพสินค้า</th>
                                        <th class="text-center">แก้ไข</th>
                                        <th class="text-center">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $row['pro_id']; ?></td>
                                            <td class="text-center"><?php echo $row['pro_name']; ?></td>
                                            <td class="text-center"><?php echo $row['pro_price']; ?></td>
                                            <td class="text-center"><?php echo $row['pro_date']; ?></td>
                                            <td class="text-center"><img src="img/<?php echo $row['pro_img']; ?>" width="100" alt="">
                                            </td>
                                            <td class="text-center">
                                                <a href="edit_product.php?pro_id=<?php echo $row['pro_id']; ?>" class="btn btn-success btn-sm">แก้ไข
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="delete_product.php?pro_id=<?php echo $row['pro_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบสินค้านี้จริงหรือ ?');">ลบ</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "ไม่มีข้อมูล";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>