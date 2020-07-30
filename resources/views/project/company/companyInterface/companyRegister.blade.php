
<!-- Modal -->
<div class="modal fade" id="companyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:black;">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Company Registion Form </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <!-- New Form -->
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="modal-body">
        <div class="container">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
              <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Name</label>

              <div class="col-md-8">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus style="background: #ddd;">

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
              <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#fff;">E-Mail Address</label>

              <div class="col-md-8">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required style="background: #ddd;">

                  @if ($errors->has('email'))
                      <span class="help-block text-danger">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
              <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Password</label>

              <div class="col-md-8">
                  <input id="password" type="password" class="form-control" name="password" required style="background: #ddd;">

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Confirm Password</label>

              <div class="col-md-8">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="background: #ddd;">
              </div>
          </div>
          <div class="form-group row">
            <label for="user_position" class="col-md-4 col-form-label text-md-right" style="color:#fff;">User Position</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="user_position" name="user_position" style="background: #ddd;">
            </div>
          </div>
          <div class="form-group row">
            <label for="company_name" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Company Name</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="company_name" name="company_name" style="background: #ddd;">
            </div>
          </div>
          <div class="form-group row">
            <label for="company_location" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Company Location</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="company_location" name="company_location" style="background: #ddd;">
            </div>
          </div>
          <div class="form-group row">
            <label for="phone_no" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Phone No</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="phone_no" name="phone_no" style="background: #ddd;">
            </div>
          </div>
          <div class="form-group row">
            <label for="company_nrc" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Company Nrc</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="company_nrc" name="company_nrc" style="background: #ddd;">
            </div>
          </div>
          <div class="form-group row">
            <label for="company_overview" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Company Overview</label>
            <div class="col-md-8">
              <textarea class="form-control" rows="4" name="company_overview" id="company_overview" style="background: #ddd;"></textarea>
            </div>
          </div>
          <div class="form-group row">
            
            <div class="col-sm-8 offset-4">
              <input type="checkbox" id="advertise" name="advertise">&nbsp;&nbsp;<span style="color:#fff;">Are you really advertise ?</span>
            </div>

          </div>
        </div>
       </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-success" id="registerSubmit">Register</button>
      </div>
    </form>
   </div>
  </div>
</div>
 