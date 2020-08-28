<!-- Modal -->
<div class="modal fade" id="addStock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Manage Stock (Beta)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="from_addStock" onsubmit="return false">
        <div class="form-group">
        <div class="form-group">
    <label for="exampleInputPassword1">Branch</label>
      <select class="form-control" name="branch_info" id="branch_info">
      </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Item</label>
      <select class="form-control" name="item" id="item">
      </select>
  </div>
    <div class="form-group">
      <label for="inputState">Brand</label>
      <select name="select_brand_stock" id="select_brand_stock" class="form-control">
      </select>
    </div>
    <div class="form-group">
      <label for="inputState">Category</label>
      <select name="select_category_stock" id="select_category_stock" class="form-control">
      </select>
    </div>
    <label>Stock Quantity</label>
    <input type="text" class="form-control" name="stock" id="stock" placeholder="Enter Stock Quantity">
    <small id="branch_error"></small>
  </div>
  <div class="form-group">
    <label>Unit</label>
    <input type="text" class="form-control" name="unit" id="unit" placeholder="Enter unit">
    <small id="branch_error"></small>
  </div>

<button type="submit" class="btn btn-primary">Save Changes</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>  
    </div>
  </div>
</div>