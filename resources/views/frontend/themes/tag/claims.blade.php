
@extends('frontend.themes.tag.master')


<style>
.container {
    max-width: 1444px !important;
}
#button{
  display:block;
  margin:20px auto;
  padding:10px 30px;
  background-color:#eee;
  border:solid #ccc 1px;
  cursor: pointer;
}
#overlay{	
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}
    </style>
@section('top')
<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-1.jpg" data-black-overlay="4">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col">
                          
                        </div>
                        <div class="col">
                            <h6>Claims</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="page-content">

            <!-- Services Details Area -->
            <div class="services-details-area in-section section-padding-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 pr-0">
                            <div class="service-details-content">
                               
                            <div class="service-details-img" data-black-overlay="4">
                                <h4 class="text-center">Fill Claims</h4>
                            </div>
                    
                                <div class="card">
                                <div class="card-body">
                                <div class="row">
                        
                        <div class="col-lg-12">
                            <!-- contact-form-warp Start -->
                            <div class="contact-form-warp">
                            <p class="form-messege"></p>

                                @if(Session::has('message'))
                                <p class="alert alert-primary">{{Session::get('message')}} </p>

                                @endif
                            @if($errors->any())
                        @foreach($errors as $error)
                        <p class="alert alert-danger">{{$error}} </p>


                        @endforeach
                            @endif
                                <form id="contact-form" action="{{route('postcontactus')}}" method="post">
                                    <div class="row" id="formcontainer">
                                        <div class="col-lg-2 col-md-6">
                                            <div class="input-box">
                                            <label for="inputEmail3" class="col-form-label">Claims Type</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                            <select class="form-control" id="claimtype"> 
                                            <option value="retirement">Retirement </option>
                                            <option value="life">Life Claim </option>
                                            <option value="cash">Cash  Claim </option>

                                            </select>                                            
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                   
                                    <div class="contact-submit-btn text-center">
                                        <button type="submit" class="submit-btn default-btn">SUBMIT NOW</button>
                                    </div>
                                </form>
                            </div>
                            <!-- contact-form-warp End -->
                        </div>
                        
                    </div>

                                
                                    
                                </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <div class="service-widget-categories">
                            <h4 class="service-widget-title">
                        <span>Downloads</span>
                        <p>Please fill it and email it back to info@metropolitangh.com</p>
                    </h4>
                                <ul class="service-cat-list">
                        <li><a href="#">RETIREMENT CLAIM  FORM</a></li>
                        <li><a href="#">LIFE CLAIM FORM</a></li>
                        <li><a href="#">CASH FORM </a></li>
                    </ul>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Services Details Area -->

        </main>
@endsection

@section('scripts')
<script src="{{asset('admin/assets/js/jquery.steps.min.js')}}"></script>

<script src="{{asset('admin/assets/js/default-assets/wizard-form.js')}}"></script>

<script>
$('#claimtype').on('change',function(){
    $('#ajaxcon').hide();
    $("#overlay").fadeIn(300);　
    var val1 = $(this).val();
//     $(function ($) {
    var url = "{{route('form1',['type'=>':val'])}}"
 url =url.replace(':val',val1)
    //$("#strps").load(url)
    $.get(
        url,
    function (data) {
        $("#formcontainer").append(data);
        setTimeout(function(){
        $("#overlay").fadeOut(300);
      },500);
    }
);
// $('#example-form').steps("add", {
//   title: "HTML code", 
//   content: "This is a test"
// })

// .steps("add", {
//   title: "HTML code2", 
//   content: "This is a test2"
// });                 

// });
// var wizard = $("#example-form").steps();
//         wizard.steps("add", {
//             enableContentCache: true,
//             headerTag: "h3",
//             bodyTag: "section",
//             title: "HTML code", 
//             content: "This is a test"
//         });
//         wizard.steps("add", {
//             enableContentCache: true,
//             headerTag: "h3",
//             bodyTag: "section",
//             title: "HTML code2", 
//             content: "This is a test2"
//         }); 
});

</script>
@endsection