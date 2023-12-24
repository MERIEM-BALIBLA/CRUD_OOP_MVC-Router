<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php");
    echo "keep your tears for another day ";
    use NS\controller\Teamcontroller;

    $ob = new Teamcontroller();
    $ob -> insertAction($_POST['name'],$_POST['description']);
    // $ob -> insertAction();
    // header ("lacation : index.php");
    header("Location: index.php");
