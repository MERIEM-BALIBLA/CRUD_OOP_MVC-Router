<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php");
    use NS\controller\Teamcontroller;

    $obj = new Teamcontroller();
    $obj->editAction($_POST['id'],$_POST['name'],$_POST['description']);

    header("Location:index.php");
