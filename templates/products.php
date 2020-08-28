<!-- Modal -->
<div class="modal fade" id="products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form id="from_product" onsubmit="return false">
  <div class="form-row">
  </div>
  <div class="form-group">
    <label for="inputAddress">Barcode</label>
    <input type="text" class="form-control" name="bcode" id="bcode" placeholder="Barcode">
  </div>
  <div class="form-group">
    <label for="inputAddress">Product Description</label>
    <input type="text" class="form-control" name="pdes" id="pdes" placeholder="Product Description">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Purcahse Price</label>
    <input type="text" class="form-control" name="pprice" id="pprice" placeholder="Purchase Price">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Sale Price</label>
    <input type="text" class="form-control" name="sprice" id="sprice" placeholder="Sale Price">
  </div>
    <div class="form-group">
      <label for="inputState">Brand</label>
      <select name="select_brand" id="select_brand" class="form-control">
      </select>
    </div>
   <div class="form-group">
      <label for="inputState">Category</label>
      <select name="select_category" id="select_category" class="form-control">
      </select>
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