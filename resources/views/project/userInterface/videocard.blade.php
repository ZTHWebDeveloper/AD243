<?php 
use App\Video;
 ?>
@extends('project.userInterface.modal')
@extends('project.userInterface.collaspace')
<div class="card-deck" id="card col-lg-12">
   <?php 

    $videos=Video::paginate(3);
    

    ?>
     @foreach($videos as $video)
        <div class="card border-primary mb-3 col-lg-4">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!--  profile change -->
            <div class="mx-auto d-block">
                <img class="img img-125 rounded-circle mx-auto d-block w-30" height="100px;" src="{{asset($video->profile)}}" alt="" style="border:1px solid gray;margin-top: 10px;">
                <h5 class="text-center m-t-15 m-b-15">{{$video->profile_name}}</h5>
                <div class="location text-center">
                   <span style="font-style: italic;font-weight: bold;">
                      {{$video->occupation}}
                   </span>
                   
                </div>
                <div class="location text-center">
                    <span style="font-style: italic;font-weight: bold;">{{$video->location}}</span>
                </div>
                <div class="location text-center">
                    {{$video->created_at}}
                </div>
            </div>
           <!--  profile change -->
            <hr style="background:gray;">
            <div class="card-body">
              <p>Company Name: &nbsp;&nbsp;{{$video->company_name}}</p>
               <h5 class="card-title">{{$video->product_title}}</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.  unserialize($post->img) as $image</p>
            </div>      
            <div class="carousel-inner">
             
                <div class="carousel-item active">
                  <video controls="" class="w-100" height="200" muted="" preload=""  poster="">
                    <source src="{{asset('/uploads/'.$video->video)}}" type="video/mp4">
                  </video>
                </div>
      
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-thumbs-o-up"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-commenting"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-external-link"></span></button>

          </div>
          <div style="border:1px solid gray;border-radius:10px;padding: 5px;background: #ddd;padding-left: 30px;">
            <span style="font-weight: bold;color:black;">Like(1000)</span><br>
            <span style="font-weight: bold;color:black;">comments(1000)</span>
          </div>
        </div>
        @endforeach
        
     </div>
     <div class="well pull-right btn btn-outline-success btn-small" style="font-size: 20px; border-radius: 10px;">
       {{$videos->links()}}
     </div>
    
    