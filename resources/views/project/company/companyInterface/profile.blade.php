@extends('project.layout.master')
@section('title','CompanyPostForm')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection
@section('slider')
      @include('project.layout.slider')
@endsection
@section('contact')
    <div class="container bg-secondary text-white col-sm-6 " style="border-radius: 10px;box-shadow: 2px 5px 5px 2px gray">
      <h1 class="display-4">Profile</h1>
      <form class="col-sm-12" method="post">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="company_name" class="col-sm-4 col-form-label">Company Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="company_name" name="company_name">
          </div>
        </div>
        <div class="form-group row">
          <label for="photo" class="col-sm-4 col-form-label">Profile Picture</label>
          <div class="col-sm-8">
            <input type="file" id="photo" name="profile_picture">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <button type="reset" class="btn btn-outline-light">Clear</button>
          </div>
          <div class="col-sm-8">
            <button type="submit" class="btn btn-outline-light">Confirm</button>
          </div>
        </div>
      </form>
    </div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection