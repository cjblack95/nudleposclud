<!-- Modal -->
<div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form id="from_category" onsubmit="return false">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
    <small id="cat_error"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parent Category</label>
      <select class="form-control" name="parent_cat" id="parent_cat">
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