<?php
    require_once '../head/head.php';
?>

<form action = "store.php" method = "POST" autocomplete = "off">
  <div class="mb-3">
    <label class="form-label">Team name</label>
    <input class="form-control" required type="text" name = "name">
  </div>
  <div class="mb-3">
    <label class="form-label">Short description</label>
    <input type="text" class="form-control" required name = "description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-danger" href="index.php">Cancel</a>
</form>

<?php
    require_once '../head/footer.php';
?>