
<!-- Modal -->
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova kategorija</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <form id="update_category_form" onsubmit="return false">
              <div class="mb-3">
                <label >Category</label>
                <input type="hidden" name="cid" id="cid" value=""/>
                <input type="text" class="form-control"name="update_category" id="update_category" aria-describedby="emailHelp">
                <small id="cat_error" class="form-text text-muted"></small>
                
              </div>
              <div class="mb-3">
                <label">Parent Category</label>
                <select class="form-control" id="parent_cat" name="parent_cat">
                  <option value='0'>Root</option>
                </select>
                
                <small id="cat_error" class="form-text text-muted"></small>
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