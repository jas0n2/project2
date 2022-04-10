
@extends('frontend.themes.tag.master')

<link rel="stylesheet" href="{{asset('admin/assets/style.css')}}">


@section('top')

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
      <!--// Breadcrumb -->

      <!-- Page Conttent -->
      <main class="page-content">
      <div class="form-group row" id="formcontainer">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Claims Type</label>
    <div class="col-sm-10" >
        <select class="form-control" id="claimtype"> 
            <option>Retirement </option>
            <option>Life Claims </option>
            <option>Cash  Claims </option>

</select>
    </div>
    
  </div>
          <!-- Services Details Area -->
          <div class="services-details-area in-section section-padding-lg">
          <div class="row">
                      <div class="col-12 box-margin height-card">
                          <div class="card">
                              <div class="card-body">
                                  <div class="wizard-form-area" id="strps">
                                      <h5 class="card-title">Jquery Steps Wizard</h5>

                                      <form id="example-form" action="#" method="post">
                                          <div>
                                          <h3 class="font-20">Choose Claim Type</h3>
                                              <section>
                                                  <h3 class="font-20">Account</h3>
                                                  <div class="form-group">
                                                      <label>Email address</label>
                                                      <select class="form-control" id="claimtype">
                                                      <option> Retirement </option>
                                                      </select>
                                                  </div>
                                                  
                                              </section>
                                            
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      
                      <div class="col-lg-8 pr-0">
                          <div class="service-details-content">
                             
                              <!-- service-details-img -->
                              <div class="service-details-img" data-black-overlay="4">
                                  <img src="assets/images/services/service-details-image.jpg" alt="service Details">
                              </div>
                              <!--// service-details-img -->
                              
                              <div class="car-insurance mt-50">
                                  <h4>CAR INSURANCE</h4>
                                  <p>Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                              </div>
                              
                              <blockquote class="service-blockquote mt-50">
                                  <span class="top-overlay"></span>
                                  <span class="bottom-overlay"></span>
                                  <p>Deserunt mollit anim id est laborum. Sed ut persp iciatis unde omnis iste naerror sit voluptatem accusantium doloremque laudantium, totam rem aperiaeaque ipsa qura incidunt ut labore et dolore magnam aliquam quae.</p>
                              </blockquote>
                              
                              <div class="car-insurance mt-50">
                                  <h4>Get the Right Coverage</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </p>
                              </div>
                              <ul class="ul-style-2">
                                  <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                  <li> veniam, quis nostrud exercitation ullamco laboris nisi  <br> ut aliquip ex ea commodo consequat. Duis </li>
                                  <li> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <br> ex ea commodo consequat. Duis </li>
                              </ul>
                              
                              <div class="car-insurance-area mt-50">
                                  <h4 class="insurance-title">What you cover in car insurance</h4>
                                  
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-life-insurence"></i>
                                              </span>
                                              <h5>24/7 CLAIM SUPPORT</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-mortgage"></i>
                                              </span>
                                              <h5>Expert Agent</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-bars"></i>
                                              </span>
                                              <h5>Access on The Go</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-partner"></i>
                                              </span>
                                              <h5>Safe Driving Discounts</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-car"></i>
                                              </span>
                                              <h5>Insurance Insight</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="in-service-3 mt-30">
                                              <span class="feature-icon">
                                                  <i class="flaticon-agriculture"></i>
                                              </span>
                                              <h5>Reliable Service</h5>
                                              <p>Voluptatem sequi nesc. Neque porro quisquam</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="car-insurance mt-50">
                                  <h4>Why You Need Car Insurance</h4>
                                  <ul class="ul-style-2">
                                      <li>Lorem ipsum dolor sit amet, ciit in voluptate velit esse cillum.</li>
                                      <li>Tempor at. Duis aute irure dolor in reprehenderit in voluptate veldolou fugiat nulla paria turat.</li>
                                      <li>Omnis iste natus error sit voluptatem accusantium doloremque laudantiuquae ab illo inventore veritatis et
                                          quasi dolorem.</li>
                                      <li>Do eiusmod tempor incididunt ut labore et dolore masit amet.</li>
                                  </ul>
                              </div>
                              
                          </div>
                      </div>
                      <div class="col-lg-3 pl-0 offset-lg-1">
                          <div class="service-widget-categories">
                              <h4 class="service-widget-title">
                                  <span>Categories</span>
                              </h4>
                              <ul class="service-cat-list">
                                  <li><a href="#">Life  Insurance</a></li>
                                  <li><a href="#">House Insurance</a></li>
                                  <li><a href="#">Car Insurance</a></li>
                                  <li><a href="#">Travel Insurance</a></li>
                              </ul>
                              <div class="download-brochure-area">
                                  <h5>Download Brochure</h5>
                                  <p>For emergency help contact us, without any hasitation</p>
                              </div>
                              <div class="in-service-side">
                                  <div class="in-service-side-image">
                                      <a href="#">
                                          <img src="assets/images/services/service-image-1.jpg" alt="service image">
                                      </a>
                                      <span class="in-service-side-icon">
                                          <img src="assets/images/icons/details-down.png" alt="">
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container">
            
          </div>
          <!--// Services Details Area -->

      </main>

@endsection

@section('scripts')
<script src="{{asset('admin/assets/js/jquery.steps.min.js')}}"></script>

<script src="{{asset('admin/assets/js/default-assets/wizard-form.js')}}"></script>

<script>
$('#claimtype').on('change',function(){
//     $(function ($) {
  var url = "{{route('form1')}}"
  //$("#strps").load(url)
  $.get(
      url,
  function (data) {
      $("#strps").html(data);
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