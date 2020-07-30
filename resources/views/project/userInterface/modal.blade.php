
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Registion with your google account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" class="col-sm-12">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="container">
    
            <div class="form-group row">
              <label for="user_email" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="user_email" name="user_email">
              </div>
            </div>
            <div class="form-group row">
              <label for="user_password" class="col-sm-4 col-form-label">User Password</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="user_password" name="user_password">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>