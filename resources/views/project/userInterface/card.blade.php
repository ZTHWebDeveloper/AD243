<?php 
use App\Post;
 ?>
@extends('project.userInterface.modal')
@extends('project.userInterface.collaspace')
<div class="card-deck" id="card col-lg-12">
   <?php 

    $posts=Post::paginate(3);
    

    ?>
     @foreach($posts as $post)
        <div class="card border-primary mb-3 col-lg-4">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!--  profile change -->
            <div class="mx-auto d-block">
                <img class="img img-125 rounded-circle mx-auto d-block w-30" height="100px;" src="{{asset($post->profile)}}" alt="" style="border:1px solid gray;margin-top: 10px;">
                <h5 class="text-center m-t-15 m-b-15">{{$post->profile_name}}</h5>
                <div class="location text-center">
                   <span style="font-style: italic;font-weight: bold;">
                      {{$post->occupation}}
                   </span>
                   
                </div>
                <div class="location text-center">
                    <span style="font-style: italic;font-weight: bold;">{{$post->location}}</span>
                </div>
                <div class="location text-center">
                    {{$post->created_at}}
                </div>
            </div>
           <!--  profile change -->
            <hr style="background:gray;">
            <div class="card-body">
              <p>Company Name: &nbsp;&nbsp;{{$post->company_name}}</p>
               <h5 class="card-title">{{$post->post_title}}</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.  unserialize($post->img) as $image</p>
            </div>
            <ol class="carousel-indicators">
                   @foreach(unserialize($post->img) as $image)
                     <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="active" class="{{$loop->first ? 'active':''}}">
                      <img src="{{asset('upload/'.$image)}}" class="d-block w-100 " height="30px; " alt="..." style="box-shadow: 2px 5px 5px 2px black;border: 1px solid black;" >
                    </li>
                   @endforeach
              <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1">
                <img src="{{asset('photo/flower.jpg')}}" class="d-block w-100 mb-3" style="box-shadow: 2px 2px 2px 2px black;border: 1px solid black;" alt="..." >
              </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2">
                <img src="{{asset('photo/h.jpg')}}" class="d-block w-100 border-primary" alt="..." style="box-shadow: 2px 2px 2px 2px black;" >
              </li> -->
            </ol> 
                     
            <div class="carousel-inner">
               
              @foreach(unserialize($post->img) as $image)
                <div class="carousel-item {{$loop->first ? 'active':''}}">
                  <img src="{{asset('upload/'.$image)}}" class="d-block w-100" height="300px" alt="..." >
                </div>
              @endforeach
              <!-- <div class="carousel-item">
                <img src="{{asset('photo/flower.jpg')}}" class="d-block w-100" height="300px" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('photo/h.jpg')}}" class="d-block w-100" height="300px" alt="..." >
              </div> -->
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
    {{$posts->links()}}
    