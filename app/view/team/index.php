<?php
// index.php
    

    require_once '../head/head.php';
    require_once 'C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php';
    use NS\controller\Teamcontroller;
    $ob = new Teamcontroller();
    $rows = $ob->readAction();
?>

<div class = "p-4">
<a href="create.php" class = "btn btn-primary">Add new team</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php if($rows): ?>
        <?php foreach ($rows as $row): ?>
            <tr scope="row">
                <td><?= $row -> name ?></td>
                <td><?= $row -> description ?></td>
                <td>
                    <a href="edit.php?id=<?= $row -> id?>" class="btn btn-success">Edit</a>
                    <a href="delete.php" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete the Team</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Once deleted, the team cannot be recovered</p>
                        </div>
                        <div class="modal-footer">
                            <a href="index.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                            <a href="delete.php?id=<?= $row -> id?>" type="button" class="btn btn-warning">Confirm</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
        <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros actualmente</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>

</div>

<?php require_once '../head/footer.php'?>