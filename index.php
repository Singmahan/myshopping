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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SHOPPING</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="#">หน้าหลัก</a>
                            <a class="nav-link" aria-current="page" href="#">เกี่ยวกับ</a>
                            <a class="nav-link" href="#">ติดต่อ</a>
                        </div>
                    </div>
                </div>

            </nav>
            <div class="container-fluid mt-3">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page">
                                        <span data-feather="home"></span>
                                        ประเภทสินค้า
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="file"></span>
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="show_product.php">
                                        <span data-feather="shopping-cart"></span>
                                        Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="users"></span>
                                        Customers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="bar-chart-2"></span>
                                        Reports
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="layers"></span>
                                        Integrations
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="file-text"></span>
                                        Current month
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <p>สินค้าทั้งหมด</p>
                        </div>
                        <!-- ส่วนเนื้อหา -->
                        <div class="right_col">
                            <?php
                            $queries = array();
                            parse_str($_SERVER['QUERY_STRING'], $queries);
                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                            switch ($queries['page']) {
                                    // home 
                                case 'index':
                                    include 'all_product.php';
                                    break;
                                    // all_data
                                // case 'show_product':
                                //     include 'show_product.php';
                                //     break;
                            }
                            ?>
                        </div>
                        <?php include('all_product.php'); ?>
                    </main>
                </div>
            </div>
        </div>
    </div>








</body>

</html>