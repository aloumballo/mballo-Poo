<?php
use App\Core\Constantes

?>


<form  method="POST"  action="<?=Constantes::WEB_ROOT.'addprof'?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom Complet</label>
    <input name="nomComplet" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom Complet">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grade</label>
    <input  name="grade"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Grade">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>