@extends('project.company.companyInterface.companyRegister')
@extends('project.company.companyInterface.companyLoginpage')
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <a class="navbar-brand text-brand" href="{{url('/')}}"><img src="{{asset('img/logo1.png')}}" class="w-10" height="90px;" style="border-radius: 100%;"></a>
      <!-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/aboutus')}}">About</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html" data-toggle="modal" data-target="#companyModalLogin">Login</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#companyModal" id="open">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->