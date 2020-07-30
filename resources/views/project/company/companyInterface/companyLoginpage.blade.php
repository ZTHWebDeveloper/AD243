
<!-- Modal -->
<div class="modal fade" id="companyModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:black;">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">Company Login!! </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <form method="post" class="col-sm-12" action="{{url('companylogin')}}">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="container">
           
            <div class="form-group row">
              <label for="user_email" class="col-sm-4 col-form-label" style="color:#fff;">User Email</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="user_email" name="user_email" style="background: #ddd;">
              </div>
            </div>
            <div class="form-group row">
              <label for="user_password" class="col-sm-4 col-form-label" style="color:#fff;">User Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="user_password" name="user_password" style="background: #ddd;">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success">Login</button>
      </div>
    </form> -->
     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
      <div class="modal-body">
        <div class="container">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                <label for="email" class="col-md-4 col-form-label text-md-right text-white">E-Mail Address</label>

                <div class="col-md-8">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                <label for="password" class="col-md-4 col-form-label text-md-right text-white">Password</label>

                <div class="col-md-8">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 offset-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="form-check-label text-white">Remember Me</span>
                        </label>
                    </div>
                </div>
            </div>
           </div>
         </div>
            <div class="form-group">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-outline-success">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>

    </div>
  </div>
</div>