@extends('project.layout.master')
@section('title','CompanyUI')
@section('navbar')
      @include('project.layout.navbar')
@endsection
@section('slider')
      @include('project.layout.slider')
@endsection
@section('contact') 

  <div class="aboutus" style="margin-top: 100px;">
		<div class="container">
			<h3>Our Advertisng information</h3>
			<hr>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="photo/h.jpg" class="img-responsive" width="500px">
				<h2><strong>Our Advertisiment</strong></h2><br>
                <p>A website is the perfect platform to advertise or sell goods and services online. These days if you don't have a website, your business simply doesn't exist. Online presence is a must if you want to attract maximum number of people to purchase your goods and services.
                </p>
                <p>
                People visit a website to get information about the products or   services they require. Through a user-friendly website, you can convince online visitors that your products or services will best satisfy their needs. The website that you create should not only contain the required information but also have a nice design and layout.
			</div>
			<!-- Our Skills -->

            <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill">
					<h2><strong>Successful Products</strong></h2><br>
					<p style="font-size: 18px;"><strong>Successful poducts by advertising in our website.</strong></p>

					<div class="progress-wrap">
						<h3>Phone</h3>
						<div class="progress">
						  <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
							<span class="bar-width">85%</span>
						  </div>

						</div>
					</div>

					<div class="progress-wrap">
						<h3>Laptop</h3>
						<div class="progress">
						  <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
						   <span class="bar-width">95%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h3>Tablet</h3>
						<div class="progress">
						  <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="bar-width">80%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h3>Bluetooth</h3>
						<div class="progress">
						  <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
							<span class="bar-width">90%</span>
						  </div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	 </div>
    <!-- Our Skills -->

		<div class="our-team">
		<div class="container">
			<h3 style="text-align: center;">Our Team</h3>	
			<div class="text-center">
				<div class="col-md-4 wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="photo/h.jpg" alt="" style="width: 300px;height: 300px;" >
					<div class="well" style="border-radius: 20px;background: silver;margin-top: 10px;" class="img-responsive">
					<h4>Mr.Naung Naung</h4>
					<h5><strong><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;09-781 716 928</strong></h5>
					<p><strong><a href="naungn659121@gmail.com">naungn659121@gmail.com</a></strong></p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="photo/h.jpg" alt="" style="width: 300px;height: 300px;" >
					<div class="well" style="border-radius: 20px;background: silver;margin-top: 10px;" class="img-responsive">
					<h4>Mrs.Theint Theint Moe</h4>
					<h5><strong><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;09259289692</strong></h5>
					<p><strong><a href="naungn659121@gmail.com">theinttheint17@gmail.com</a></strong></p>
					</div>
				</div>
                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="iphoto/h.jpg" alt="" style="width: 300px;height: 300px;" >
					<div class="well" style="border-radius: 20px;background: silver;margin-top: 10px;" class="img-responsive">
					<h4>Mrs.Saw Myat Mon</h4>
					<h5><strong><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;09450882736</strong></h5>
					<p><strong><a href="naungn659121@gmail.com">sawmyatmon12345@gmail.com</a></strong></p>
					</div>
                </div>
				<!-- New-->

				 <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
					<img src="photo/h.jpg" alt="" style="width: 300px;height: 300px;" class="img-responsive">
					<div class="well" style="border-radius: 20px;background: silver;margin-top: 10px;">
					<h4>Mrs.Soe Thiri Ko</h4>
					<h5><strong><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;09402749672</strong></h5>
					<p><strong><a href="naungn659121@gmail.com">soethiriko19@gmail.com</a></strong></p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms">
					<img src="photo/h.jpg" alt="" style="width: 300px;height: 300px;">
					<div class="well" style="border-radius: 20px;background: silver;margin-top: 10px;" class="img-responsive">
					<h4>Mrs.Mar Thinzar Htun</h4>
					<h5><strong><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;09793589461</strong></h5>
					<p><strong><a href="naungn659121@gmail.com">may965961@gmail.com</a></strong></p>
					</div>

				</div>
				
			 </div>
		</div>
	</div>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection