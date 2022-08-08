<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="add-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add / Edit Food</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form method="post" id="addform" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label for="food_name" class="form-label">Food Name</label>
            <input type="text" id="food_name" name="food_name" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="food_des" class="form-label">Food Description</label>
            <input type="text" id="food_des" name="food_des" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="food_prize" class="form-label">Food Prize</label>
            <input type="text" id="food_prize" name="food_prize" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="food_img" class="form-label">Food Image</label>
            <input type="file" id="food_img" name="food_img" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
      </div>
      <input type="hidden" name="action" value="adduser">
      <input type="hidden" name="userId" id="userId" value="">
      </form>
  </div>
</div>