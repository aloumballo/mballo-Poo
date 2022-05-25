
<?php
use App\Core\Constantes

?>


<form  method="POST"  action='add-motif'>
  
  

 
  <div class="form-group">
    <label for="exampleInputPassword1">Motif</label>
    <input  name="motif"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Grade">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input  name="date"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Grade">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Etat</label>
    <input  name="etat"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Grade">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>