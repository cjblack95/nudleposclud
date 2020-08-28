<!-- Modal -->
<div class="modal fade" id="brands" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="from_brand" onsubmit="return false">
  <div class="form-group">
    <label>Brand Name</label>
    <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
    <small id="brand_error"></small>
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