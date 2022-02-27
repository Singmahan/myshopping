<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    include('connectdb.php');

    $pro_id = $_GET['pro_id'];
    $q = "SELECT * FROM tb_product WHERE pro_id='$pro_id'";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3>แก้ไขสินค้า</h3>
                            </div>
                            <div class="card-body">
                                <form action="update_product.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="pro_id" value="<?php echo $row['pro_id']; ?>">
                                    <div class="from-group">
                                        <label> ชื่อสินค้า</label>
                                        <input type="text" name="pro_name" class="form-control" value="<?php echo $row['pro_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label> ราคา</label>
                                        <input type="text" name="pro_price" class="form-control" value="<?php echo $row['pro_price']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label> รูปภาพ</label>
                                        <input type="hidden" name="old_file1" value="<?php echo $row['pro_img']; ?>">
                                        <input type="file" name="pro_img" id="pro_img" class="form-control" value="">
                                        <img src="img/<?php echo $row['pro_img']; ?>" width="300" class="mt-2">
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" name="update_btn" class="btn btn-success form-control">อัพเดทสินค้า</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } else {
        echo "ไม่พบข้อมูล";
    }
    ?>
</body>

</html>