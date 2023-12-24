<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php");
    // echo "keep your tears for another day ";
use NS\controller\Teamcontroller;


    $ob = new Teamcontroller();
    $ob -> deleteAction($_GET['id']);
    header("Location: index.php");
