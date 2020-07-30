@extends('project.layout.master')
@section('title','CompanyPostForm')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection
@section('contact')
    <div class="container" style="margin-top: 180px;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success" style="border-radius: 10px 10px 0px 0px"><h4 class="text-center">Fill Code To Buy Package</h4></div>

                <div class="card-body" style="background:#000;">
                    <form method="post">
                      @if(session('success'))
                        <p class="alert alert-danger">{{session('success')}}</p>
                      @endif
                      {{csrf_field()}}
                        <div class="form-group row">
                          <label for="verify_code" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Verify Code</label>
                          <div class="col-md-5">
                            <input type="number" class="form-control" id="verify_code" name="verify_code" required="">
                          </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-outline-success">
                                    Confirm
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection