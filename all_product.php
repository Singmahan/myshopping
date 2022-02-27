<div class="row">
    <?php
    $q = "SELECT * FROM tb_product";
    $result = mysqli_query($conn, $q);
    if (mysqli_num_rows($result) > 0) { ?>


        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>


            <div class="col-sm-3" align="center">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="img/<?php echo $row['pro_img']; ?>" width="200" alt="">
                        </div>

                        <strong>
                            <?php echo $row['pro_name']; ?>
                        </strong><br>
                        ราคา : <?php echo $row['pro_price']; ?>

                        <a href="#" class="btn btn-primary form-control">สั่งซื้อสินค้า</a>
                    </div>
                </div>
            </div>

        <?php } ?>


    <?php
    } else {
        echo "ไม่มีข้อมูล";
    } ?>
</div>