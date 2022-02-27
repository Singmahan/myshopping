<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>เพิ่มสินค้า</h3>
                    </div>
                    <div class="card-body">
                        <form action="add_product_db.php" method="POST" enctype="multipart/form-data">
                            <div class="from-group">
                                <label> ชื่อสินค้า</label>
                                <input type="text" name="pro_name" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label> ราคา</label>
                                <input type="text" name="pro_price" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label> รูปภาพ</label>
                                <input type="file" name="pro_img" class="form-control" value="" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="submit" class="btn btn-success form-control" value="เพิ่มสินค้า">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>