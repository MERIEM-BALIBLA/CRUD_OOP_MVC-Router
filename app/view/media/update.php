<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Mediacontroller.php");
    use NS\controller\Mediacontroller;

    $obj = new Mediacontroller();
    $obj->editAction($_POST['id'],$_POST['description']);

    header("Location:index.php");
