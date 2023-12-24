<?php 
  require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\app\controller\Teamcontroller.php");
  require_once 'config/autoload.php';
  require_once 'config/router.php';
  require_once 'head.php' ;
  use NS\controller\Teamcontroller;  
    $ob = new Teamcontroller();
    $rows = $ob->readAction();?>
  
    <!-- <a href="view/team/create.php" class = "btn btn-primary">Add new team</a> -->
    
<div class="d-flex flex-row p-4">
  <?php if($rows): ?>
    <?php foreach ($rows as $row): ?>
      <div class="card-deck px-4">
        <div class="card">
          <div class="h-30"><img class="card-img-top" src="public/images/pexels-riccardo-41257.jpg" alt="Card image cap"></div>
          <div class="card-body">
            <h5 class="card-title"><?= $row -> name ?></h5>
            <p class="card-text"><?= $row -> description ?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>  

<?php
    require_once 'app/view/head/footer.php';
?>