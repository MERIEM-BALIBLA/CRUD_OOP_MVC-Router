<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Mediacontroller.php");
    echo "keep your tears for another day ";
    // use controller\Teamcontroller;
    use NS\controller\Mediacontroller;

    $ob = new Mediacontroller();
    $ob -> insertAction($_POST['des']);
    // $ob -> insertAction();
    // header ("lacation : index.php");
    header("Location: index.php");
