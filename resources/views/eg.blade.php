<?php 
use App\Profile;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
?>
<div class="row" id="acc">
       <?php 
             $user_id=Auth::user()->id;
             $multiprofile=DB::table('users')
                  ->join('profiles','users.id','=','profiles.id')
                  ->select('users.*','profiles.*')
                  ->where('profiles.id','<>',$user_id)
                 ->get();

       ?>
       @foreach($multiprofile as $profile)
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Profile</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="img img-125 rounded-circle mx-auto d-block w-50" height="120px;" src="{{ asset('uploads/'.$profile->profile) }}" alt="">
                        <h5 class="text-center m-t-15 m-b-15">{{$profile->name}}</h5>
                        <div class="location text-center">
                            <i class="zmdi zmdi-star"></i>
                            {{$profile->occupation}}
                        </div>
                        <div class="location text-center">
                        <i class="zmdi zmdi-city"></i>
                            {{$profile->location}}
                        </div>
                    </div>
                    <hr>
                    <div class="card-text text-center">
                        <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                            <a href="{{action('ViewPostController@index',$profile->id)}}" class="btn btn-light col-md-12 col-sm-4 col-xs-4">
                                <span class="fa fa-eye" style="font-size:20px;"></spam>
                            </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endforeach

</div>