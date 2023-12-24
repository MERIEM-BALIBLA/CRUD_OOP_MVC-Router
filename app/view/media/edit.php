<?php
use NS\controller\Mediacontroller;
    require_once '../head/head.php';
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Mediacontroller.php");
    // use controller\Teamcontroller;
    
    $ob = new Mediacontroller();
    $media = $ob->showAction($_GET['id']);
?>

<form action="update.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label class="form-label">Short description</label>
        <input type="text" class="form-control" required name="description" value="<?= $media->des ?>">
    </div>
    <input type="hidden" name="id" value="<?= $media->id ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="index.php">Cancel</a>
</form>
<?php
    require_once '../head/footer.php';
?>