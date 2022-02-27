<?php
    include('nav.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page="hm";
    }

    include('header.php');
    require_once($link[$page]);
    include('footer.php');
    

?>
