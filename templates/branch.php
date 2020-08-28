<!-- Modal -->
<div class="modal fade" id="branch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="from_branch" onsubmit="return false">
  <div class="form-group">
    <label>Branch Name</label>
    <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Enter Brand Name">
    <small id="branch_error"></small>
  </div>
  <div class="form-group">
    <label>Branch Address</label>
    <input type="text" class="form-control" name="branch_address" id="branch_address" placeholder="Enter Brand Address">
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