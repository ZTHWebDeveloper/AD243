@extends('project.layout.master')
@section('title','CompanyUI')
@section('navbar')
      @include('project.layout.navbar')
@endsection
@section('slider')
      @include('project.layout.slider')
@endsection
@section('contact')
	  <div class="card">
       <div class="card-header">
         <button class="btn btn-outline"> 
            <a href="{{url('userpostshow')}}" class="card-title"><strong>All Posts</strong></a>
         </button>
         <button class="btn btn-outline"> 
            <a href="{{url('uservideoshow')}}" class="card-title"><strong>All Videos</strong></a>
         </button>
       </div> 
    </div>
    <div id="card">
      @include('project.userInterface.videocard')
    </div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection