<?php
    require_once '../head/head.php';
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php");
    use NS\controller\Teamcontroller;
    
    $ob = new Teamcontroller();
    $team = $ob->showAction($_GET['id']);
?>

<form action="update.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label class="form-label">Team name</label>
        <input class="form-control" required type="text" name="name" value="<?= $team->name ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Short description</label>
        <input type="text" class="form-control" required name="description" value="<?= $team->description ?>">
    </div>
    <input type="hidden" name="id" value="<?= $team->id ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-danger" href="index.php">Cancel</a>
</form>
<?php
    require_once '../head/footer.php';
?>