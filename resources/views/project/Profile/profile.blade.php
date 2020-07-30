@extends('project.layout.master')
@section('title','CompanyPostForm')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection
@section('contact')
<div class="container" style="margin-top: 140px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success" style="border-radius: 10px 10px 0px 0px"><h2 class="text-center">Add Profile</h2></div>

                <div class="card-body" style="background:#000;">
                    <form method="POST" enctype="multipart/form-data">
                        @foreach($errors->all() as $error)
                          <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('success'))
                          <p class="alert alert-info">{{session('success')}}</p>
                        @endif

                        {{@csrf_field()}}
                        <div class="form-group row">
                          <label for="occupation" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Occupation</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="occupation" name="occupation">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="location" class="col-md-4 col-form-label text-md-right" style="color:#fff;">Location</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="location" name="location">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right" style="color: #fff;">Select Profile</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-success">
                                    Add Profile
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