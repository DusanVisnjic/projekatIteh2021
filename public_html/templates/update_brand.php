<!-- Modal -->
<div class="modal fade" id="brand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novi brend</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form id="update_brand_form" onsubmit="return false">
              <div class="mb-3">
                <label >Brend</label>
                <input type="hidden" name="bid" id="bid" value=""/>
                <input type="text" class="form-control"name="update_brand" id="update_brand" aria-describedby="emailHelp">
                <small id="brand_error" class="form-text text-muted"></small>
                
              </div>
              
            
                    <button type="submit" class="btn btn-primary">Promeni</button>
          </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>