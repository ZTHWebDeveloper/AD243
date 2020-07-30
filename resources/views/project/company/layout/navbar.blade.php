<?php 
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
?>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{url('/homepage')}}"><img src="{{asset('img/logo.png')}}" class="w-10" height="90px;"></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('companyshow')}}">Home</a>
          </li>
            
           <?php  
            //$posts=ImageVideoPackage::all(); 
            
            //single show profile
             $user_id=Auth::user()->id;
             $singleprofile=DB::table('users')
                  ->join('profiles','users.id','=','profiles.id')
                  ->select('users.*','profiles.*')
                  ->where('profiles.id','=',$user_id)
                 ->first();
           ?>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/post')}}">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/videoupload')}}">Video</a>
            </li>
            
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/post_history')}}">History</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Package
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/package')}}">Buy Package</a>
              <a class="dropdown-item" href="{{url('/package_lists')}}">Package Lists</a>
              <a class="dropdown-item" href="{{url('/history_package')}}">History Package</a>
            </div>
          </li>

          <!-- <li class="nav-item" style="margin-top: 20px;">
            <a class="nav-link" href="{{url('/package')}}">Package</a>
          </li>
          <li class="nav-item" style="margin-top: 20px;">
            <a class="nav-link" href="{{url('/package_lists')}}">Package Lists</a>
          </li> -->
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
                 <span style="font-family: 'Time New Roman';">{{Auth::user()->name}}</span>
        
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <div class="col-lg-7 offset-2">
                  <a href="{{url('allpost')}}">
                    <img src="{{asset('/uploads/'.$singleprofile->profile)}}" class="img img-125 rounded-circle mx-auto d-block w-100" height="100px;" alt="..." style="border: 2px solid gray;border-radius: 100%; background: gray;" >
                  </a>
                 
                </div>
                <div>
                  <p class="text-center" style="font-weight: bold;">{{$singleprofile->occupation}}</p>
                </div>
                <div>
                  <p class="text-center" style="font-weight: bold;">{{$singleprofile->location}}</p>
                </div>
              <div class="row">
                <div class="col-md-6"> 
                  <a class="dropdown-item" href="{{action('ProfileController@index',Auth()->user()->id)}}" >Add Profile</a>
                </div>
                <div class="col-md-6">
                 <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                </div>
              </div>
            </div>
          </li>
         
        </ul>
      </div>
     
    </div>
  </nav>
  <!--/ Nav End /-->