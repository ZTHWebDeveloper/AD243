@extends('project.layout.master')
@section('title','CompanyPostForm')
@section('navbar')
      @include('project.company.layout.navbar')
@endsection
@extends('project.company.companyInterface.packagemodal')
@section('contact')
    <div class="container" style="margin-top: 180px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success" style="border-radius: 10px 10px 0px 0px"><h2 class="text-center">To Buy Package For 1 Month</h2></div>

                <div class="card-body" style="background:#000;">
                    
                    <form method="post">
                        @if(session('success'))
                          <p class="alert alert-success">{{session('success')}}</p>
                        @endif

                         @foreach($errors->all() as $error)
                           <p class="alert alert-danger">{{$error}}</p>
                         @endforeach
                         <p class="alert alert-primary">1 Post 3 Photos (30000MMK = $20)</p>
                         <p class="alert alert-primary">1 Post 1 Video duration 15s (45000MMK = $30)</p>
                      {{csrf_field()}}
                        <!-- Required -->
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div id="null"  class="col-md-6"></div>
                        </div>
                        <div class="form-group row  text-light">
                            <label for="post" class="col-sm-4 col-form-label">Number of Posts</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="post" name="post_number">
                            </div>
                        </div>
                        
                        <div class="form-check form-check-inline text-light">
                            <input class="form-check-input" type="radio" onclick="radio_form()" name="post" id="inlineRadio1" value="30000">
                            <label class="form-check-label" for="inlineRadio1">Photos</label>
                        </div>
                        <div class="form-check form-check-inline text-light">
                            <input class="form-check-input" type="radio" onclick="radio_form()" name="post" id="inlineRadio2" value="45000">
                            <label class="form-check-label" for="inlineRadio2">Videos</label>
                        </div>
                        
                        <div class="form-group row  text-light">
                            <label for="cost" class="col-sm-4 col-form-label">Total Cost:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="cost" name="total" value="Total amount" readonly="">
                            </div>
                        </div>
                        <!-- Package Code -->
                        <div class="form-group row">
                           <div class="col-sm-4">
                                <input type="hidden" class="form-control" id="code" name="code">
                            </div>
                        </div>
                        <!-- Package Code -->
                        <div class="form-group row">
                           <div class="col-sm-4">
                                <input type="button" class="btn btn-outline-light" onclick="calculate();" value="Calculate" style="display: none;" id="view" data-toggle="modal" data-target="#packagemodal"></button>
                            </div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-outline-light" onclick="myRandom();" style="display: none;" id="show">Buy Package</button>
                            </div>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function radio_form(){
     
      var selevalue=$('input[name=post]:checked').val();
      if(selevalue=="30000"){
        document.getElementById('view').style.display="block";
         
      }
      if(selevalue=="45000"){
        document.getElementById('view').style.display="block";
         
      }
        
    }

    function calculate(){
     var postNumber=document.getElementById('post').value;
    var photos =document.getElementsByName("post");
    if(postNumber==""){
       var nullvalue='<span style="color:red;">The post number field is required.!!</span>'
         document.getElementById('null').innerHTML=nullvalue;
         document.getElementById('show').style.display="none";
    }else{
          if(photos[0].checked==true){
            var photo=document.getElementById('inlineRadio1').value;
            var total =photo*postNumber;
            document.getElementById('cost').value=total;
        }else if(photos[1].checked==true){
          var video=document.getElementById('inlineRadio2').value;
            var total =video*postNumber;
            document.getElementById('cost').value=total;
        }
        document.getElementById('show').style.display="block";

        //
        var random =Math.floor(Math.random()*1000)+1000;
        document.getElementById('code').value=random;
        document.getElementById('package').value=random;
    }

}
</script>
@endsection
@section('footer')
      @include('project.layout.footer')
@endsection