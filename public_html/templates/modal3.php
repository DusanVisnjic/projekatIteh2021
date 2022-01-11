<!-- Modal -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj proizvod</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <form class="row g-3" id="product_form" onsubmit="return false">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date</label>
    <input type="text" class="added_date" id="added_date" name="added_date" value="<?php echo date("Y-m-d"); ?>" readonly/>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Ime proizvoda</label>
    <input type="text" class="product_name" id="product_name" name="product_name" placeholder="Unesite ime proizvoda">
  </div>
  <div class="col-12">
    <label>Kategorija</label>
    <select class="form-control" id="select_cat" name="select_cat" required/>
</select>
  </div>
  <div class="col-12">
    <label >Brend</label>
    <select class="form-control" id="select_brand" name="select_brand" required/>
</select>
  </div>
  <div class="col-md-6">
    <label>Cena</label>
    <input type="text" class="product_price" id="product_price" name="product_price" placeholder="Unesite cenu proizvoda">
  </div>
  <div class="col-md-6">
    <label>Kolicina</label>
    <input type="text" class="product_qty" id="product_qty" name="product_qty" placeholder="Unesite kolicinu">
  </div>
  <div class="col-md-6">
  <button type="submit" class="btn btn-primary">Sacuvaj</button>
  <small id="product_error" class="form-text text-muted"></small>
  </div>
 
</form>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>