<?php 
use NS\controller\Mediacontroller;
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Mediacontroller.php");
    // echo "keep your tears for another day ";
    // use controller\Teamcontroller;

    $ob = new Mediacontroller();
    $ob -> deleteAction($_GET['id']);
    header("Location: index.php");
