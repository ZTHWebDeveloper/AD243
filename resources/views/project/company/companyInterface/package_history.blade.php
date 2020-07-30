
@extends('project.layout.master')
@section('title','Package_History')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection

@section('contact')
<div style="margin-top: 130px;">
	 <div class="container jumbotron">
	 	<h2 class="text-center" style="margin-bottom: 40px;font-family:'Time New Roman' ">Packages Used For Images & Videos </h2>
	 	<div class="row">
            <div class="col-md-6" style="height: 200px;overflow: scroll;">
                <table class="table table-hover">
		 			<thead>
		 				
		 				<th>Number Posts</th>
		 				<th>Images Packages</th>
		 				<th>Action</th>
		 				<th>Code</th>
		 				<th>Date & Time</th>
		 			</thead> 
		 			<tbody>
		 				@foreach($postpackages as $postpackage)
		 				<tr>
		 					
		 					<td>{{$postpackage->number_post}}</td>
		 					<td><span class="fa fa-picture-o btn-sm btn-danger"></span>&nbsp;{{$postpackage->total_amount}} kyts</td>
		 					
		 					  <td>
		 						<!-- <span class="fa fa-cart-plus btn-sm btn-danger"></span> -->
	                         	<a href="#" class="btn-sm btn-info">Used</a>
                             </td>
                             <td>
                             	<a href="#" class="btn-sm btn-secondary">{{$postpackage->code}}</a
                             </td>
                             <td>{{$postpackage->created_at}}</td>
		 				</tr>
		 				@endforeach
		 			</tbody>
                </table>
	 		</div>
	 		<div class="col-md-6"  style="height: 150px;overflow: scroll;">
		 		<table class="table table-hover">
		 			<thead>
		 				
		 				<th>Number Posts</th>
		 				<th>Videos Packages</th>
		 				<th>Action</th>
		 				<th>Code</th>
		 				<th>Date & Time</th>
		 			</thead>
		 			<tbody>
		 				@foreach($videopackages as $videopackage)
		 				  <tr>
		 				  	
		 					<td>{{$videopackage->number_post}}</td>
		 					<td><span class="fa fa-file-video-o btn-sm btn-danger"></span>&nbsp;{{$videopackage->total_amount}}kyts</td>
		 					<td>
		 						<!-- <span class="fa fa-cart-plus btn-sm btn-danger"></span> -->
                           	    <a href="#" class="btn-sm btn-info">Used</a>
                           	</td>
                           	<td>
                           		<a href="#" class="btn-sm btn-secondary">{{$videopackage->code}}</a>
                           	</td>
                           	<td>{{$videopackage->created_at}}</td>
		 				</tr>
		 				@endforeach
		 				
		 			</tbody>

		 		</table>
	 		</div>
	 	</div>
	 </div>
</div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection