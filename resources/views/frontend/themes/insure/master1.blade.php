<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8" />
    <title>
      @yield('title')
    </title>
    <!-- Stylesheets -->
    <link href="{{asset('themes/tag2/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('themes/tag2/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('themes/tag2/css/responsive.css')}}" rel="stylesheet" />

    <!-- Switcher Mockup -->
    <link href="{{asset('themes/tag2/css/color-switcher-design.css')}}" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Ubuntu:wght@300;400;500;700&amp;display=swap"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  </head>

  <body>
    <div class="terms-page">
      <div class="page-wrapper">
        <!-- Loading -->
      
        <!-- End Loading -->

        <!-- Main Header-->
        <header class="main-header header-style-two">
          <!-- Header Upper -->
          <div class="header-upper">
            <div class="auto-container">
              <div class="inner-container clearfix">
                <div class="logo-box">
                  <div class="logo">
                  <a href="{{route('home')}}"
                      >                            <img src="{{asset('logo/'.$setting[0]->logo)}}" width="130px" height="95px" alt="header image">
</a>
                  </div>
                </div>

                <div class="nav-outer clearfix">
                  <!--Mobile Navigation Toggler-->
                  <div class="mobile-nav-toggler">
                    <span class="icon flaticon-menu-2"></span>
                  </div>
                  <!-- Main Menu -->
                  <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                      <!-- Toggle Button -->
                      <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                      >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <div
                      class="navbar-collapse collapse clearfix"
                      id="navbarSupportedContent"
                    >
                    <ul class="navigation clearfix">
                       
                       <li>
                         <a href="{{route('home')}}">Home</a>
                       </li>
                       <li>
                         <a href="{{route('pages',['slug'=>'our-company'])}}">About Us</a>
                       </li>
                       <li>
                         <a href="{{route('pages',['slug'=>'insurance-scheme'])}}">Insurance Scheme</a>
                       </li>
                       <li><a href="{{route('contactus')}}">Contact Us</a></li>
                               <li><a href="{{route('career')}}">Career </a></li>
                               <li><a href="{{route('claims')}}">Claims </a></li>
                       <li class="dropdown">
                         <a href="#">Media</a>
                         <ul>
                         <li><a href="{{route('news')}}">News </a></li>
                   <li><a href="{{route('pages',['slug'=>'photos'])}}">Photo Gallery</a></li>
                   <li><a href="{{route('pages',['slug'=>'programs'])}}">Programs</a></li>
                                       <li><a href="{{route('pages',['slug'=>'seminars'])}}">Seminars</a></li>
                                       <li><a href="{{route('pages',['slug'=>'faq'])}}">FAQ</a></li>
                                       <li><a href="{{route('pages',['slug'=>'terms-and-conditons'])}}">Terms and Conditions</a></li>
                         </ul>
                       </li>
                      
                     
                       
                     </ul>
                    </div>
                  </nav>

                  <!-- Main Menu End-->
                  <div class="outer-box clearfix">
                    <!-- Phone Btn -->
                    <div class="phone-box">
                      <div class="box-inner">
                        <a class="phone" href="tel:+1555-89-7965"
                          >{{$setting[0]->phone1}}
                          <span class="icon flaticon-call-2"></span
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Header Upper-->

          <!-- Sticky Header  -->
          <div class="sticky-header">
            <div class="auto-container clearfix">
              <!--Logo-->
              <div class="logo pull-left">
                <a href="index.html" title=""
                  > <img src="{{asset('logo/'.$setting[0]->logo)}}" width="130px" height="95px" alt="header image"></a>
              </div>
              <!--Right Col-->
              <div class="pull-right">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler">
                  <span class="icon flaticon-menu-2"></span>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                  <!-- Phone Btn -->
                  <div class="phone-box">
                    <div class="box-inner">
                      <a class="phone" href="tel:{{$setting[0]->phone1}}"
                        >{{$setting[0]->phone1}} <span class="icon flaticon-call-2"></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Sticky Menu -->

          <!-- Mobile Menu  -->
          <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn">
              <span class="icon flaticon-multiply"></span>
            </div>

            <nav class="menu-box">
              <div class="nav-logo">
                <a href="{{route('home')}}"
                  ><img src="{{asset('themes/tag2/images/logo.png')}}" alt="" title=""
                /></a>
              </div>
              <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
              </div>
            </nav>
          </div>
          <!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->

        <!-- Page Title -->
       @yield('content')
        <!-- End CTA Section -->

        <!-- Main Footer -->
        <footer
          class="main-footer"
          style="background-image: url({{asset('themes/tag2/images/background/pattern-2.png')}})">
          <!-- <div
            class="top-pattern-layer"
            style="background-image: url(images/background/pattern-1.png)"
          ></div> -->
          <div class="auto-container">
            <!-- Upper Box -->
          
            <!-- End Upper Box -->

            <!-- Widgets Section -->
           
            <div class="footer-bottom">
              <div class="clearfix">
                <div class="pull-left">
                  <div class="copyright">
                    Copyright &copy; 2021. All rights reserved by <br />
                    <span>LICMIA.</span>
                  </div>
                </div>
                <div class="pull-right">
                  <ul class="footer-nav">
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Condition</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- End Main Footer -->

        <!-- Calculator Palate  -->
        <div class="calculator-palate">
          <div class="calculator-trigger">
            <i class="flaticon-keys"></i>
          </div>
          <span class="palate-tag">Calculator</span>
          <div class="palate-content">
            <!-- Styled Form -->
            
            <div class="styled-form style-two">

            <section class="u-align-center u-clearfix u-section-2" id="sec-7a6d" style="display:none">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1" id="pricetable" style="color:#fff;">
            <colgroup>
              <col width="23.1%">
              <col width="25.1%">
              <col width="26.6%">
              <col width="25.2%">
            </colgroup>
            <thead class="u-align-center u-table-header u-table-header-1">
              <tr>
                <th class="u-border-7 u-border-white u-table-cell"></th>
                <th class="u-border-7 u-border-white u-palette-1-base u-table-cell u-table-cell-2"><b id="plan">Basic Price</b>
                  <br>
                  <br>
                </th>
               
              </tr>
            </thead>
            <tbody class="u-align-center u-table-body u-table-valign-middle">
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-5" id="typep"></td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell u-table-cell-6" id="premium">ghc</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-9">Life Premium /Month</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell"  id="lifepremium">Gh</td>
              </tr>
              <tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-9">Pensions Contribution /Month</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell"  id="penscon">Gh</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-13" >Total Wallet Savings</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell" id="walletex">GHC</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-13" >Total Life Cover</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell" id="livecover">GHC</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-13" >Total Pensions Contribution</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell" id="pensionstot">GHC</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-13"  id="finali">Final Pensions Contribution with interest</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell" id="pensionstotin">GHC</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-first-column u-table-cell u-table-cell-13" >Withdrawal Pensions after 2 years</td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell" id="aftertwo">GHC</td>
              </tr>
              <tr>
                <td class="u-align-left u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell u-table-cell-29">                  <a href="#" id="closewind" class="u-border-2 u-border-palette-5-dark-1 u-btn u-btn-rectangle u-button-style u-none u-text-palette-5-dark-3 u-btn-1" style="color:#fff!important;">Close </a>
            </td>
                <td class="u-border-2 u-border-no-left u-border-no-right u-border-white u-table-cell u-table-valign-middle u-table-cell-30">
                  <a href="#" class="u-border-2 u-border-palette-5-dark-1 u-btn u-btn-rectangle u-button-style u-none u-text-palette-5-dark-3 u-btn-1" style="color:#fff !important;" id="choseplam">choose plan</a>
                </td>
               
                
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </section>
              <form method="post" id="form4" action="#">
                <!-- Form Group -->
               

                <div class="form-group">
                <label>Please Select Cover*</label>
                  <select class="form-control" id="cover">
<option value="">Please Select Cover </option>
@foreach($cover as $c)
<option  value="{{$c->id}}">{{$c->cover_name}} - ghc {{$c->lifecover}}</option>
@endforeach


</select>
                </div>
            
                <div class="form-group">
                <label>Contribution Type*</label>
                <select class="form-control" id="type">
<option value="">Contribution Type </option>
<option>Daily</option>
<option>Weekly  </option>

</select>
                </div>
                <div class="form-group">
                <label>Please Select Retirement Contribution Options*</label>
                <select class="form-control" id="contribution1">
<option  value="">Retirement Contribution Options </option>


</select>
                </div>
                <div class="form-group">
                  <label>Years to Retirement*</label>
                  <input
                    type="text"
                    name="year"
                   id="year"
                    placeholder="Years to Retirement"
                    required
                  />
                </div>

             

              

                <div class="form-group">
                  <button type="button" id="cal" class="theme-btn btn-style-four">
                    <span class="txt">Calculator </span
                    ><i class="fa fa-angle-right"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- End Calculator Palate  -->

        <!-- Contact Palate  -->
      
        <!-- End Contact Palate  -->
      </div>
    </div>
    <!-- End pagewrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-arrow-up"></span>
    </div>

    <script src="{{asset('themes/tag2/js/jquery.js')}}"></script>
    <script src="{{asset('themes/tag2/js/popper.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('themes/tag2/js/appear.js')}}"></script>
    <script src="{{asset('themes/tag2/js/parallax.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/owl.js')}}"></script>
    <script src="{{asset('themes/tag2/js/wow.js')}}"></script>
    <script src="{{asset('themes/tag2/js/nav-tool.js')}}"></script>
    <script src="{{asset('themes/tag2/js/jquery-ui.js')}}"></script>
    <script src="{{asset('themes/tag2/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('themes/tag2/js/script.js')}}"></script>
    <script src="{{asset('themes/tag2/js/color-settings.js')}}"></script>
    <script>
         $(document).ready(function() {
          $('#closewind').on('click',function(e){
    e.preventDefault();
    $('.htitle').text('Request A callback')

    $('.cal').show();
    $('#form4').show();

    form4
    $('#sec-7a6d').hide();

})
$('#choseplam').on('click',function(e){
    e.preventDefault();
    $('.htitle').text('Request A callback')

    $('.cal').show();
    $('#form4').show();
    $('#sec-7a6d').hide();

})
    $('#cal').on('click',function(e){
            e.preventDefault();

            var cover =$('#cover option:selected').val();
            var year = $('#year').val();
           
            var type = $('#type option:selected').val();
            var contribution1 = $('#contribution1 option:selected').val();
           if(cover ===""){
               alert('Please select Cover Type')
               return 
           }
           if(contribution1 ===""){
               alert('Please select your pensions contribution Amount')
               return
            }
           if(year ===""){
               alert('Please enter your Retirement Year')
             
               return
            }
            if(type ===""){
               alert('Please select your Type')
             
               return
            }
            if(year <5){
               alert('Retirement Year Should 5 or More Years')
             
               return
            }
            $('.cal').hide();
            $('#sec-7a6d').hide();
$('.cv-spinner').show();
            $("#overlay").fadeIn(300);　

            $.ajax({
  url: "{{route('clcover')}}",
  type: "get", //send it through get method
  data: { 
    id: cover,
    type:type,
    year:year,
    contribution1:contribution1
   
  },
  success: function(response) {
      $('#calculator').trigger('reset');
      $('#sec-7a6d').show();
      $('.cal').hide();
      $('#form4').hide();
      
      $('.htitle').text('Calculator Results')
    $('#plan').text(response.plan);
    $('#pricetable #typep').html(response.premiumtype);
    $('#pricetable #premium').html("Ghc "+response.premium);
    $('#pricetable #lifepremium').html("Ghc "+response.lpremium);
    $('#pricetable #walletex').html("Ghc "+response.wallet);
    $('#pricetable #penscon').html("Ghc "+response.pensionsCal);

    $('#pricetable #pensionstot').html("Ghc "+response.pensionstotal);
    $('#pricetable #finali').html("Provident fund (pension with interest after "+response.years+" years)(70% of rsa) ");

    $('#pricetable #aftertwo').html("Ghc "+response.aftertwo);

    $('#pricetable #pensionstotin').html("Ghc "+response.retirementin);

    $('#pricetable #livecover').html("Ghc "+response.lifecover);
    // $('#pricetable #typep').html(response.lpremium);
    // $('#pricetable #typep').html(response.lifecover);
    $("#overlay").fadeOut(300);
    $('.cv-spinner').hide();

    //console.log(response)
//     $.each(response, function(key,value){
//         $('#nooo').val('ss');
//         alert(value.plan)
       


 
// });
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});
        })
$('#cover').on('change',function(){
   var cover = $(this).val();
   $('#contribution1').html("<option >Loading...</option>")

   $.ajax({
  url: "{{route('covercontr')}}",
  type: "get", //send it through get method
  data: { 
    id: cover, 
   
  },
  success: function(response) {

    //console.log(response)
    $.each(response, function(key,value){

        //alert(value)
       


        $("#contribution1").empty().append(

"<option value=" + value.pensions1 +">"+value.pensions1+"</option>"

);

$("#contribution1") .append(

"<option value=" + value.pensions2 +">"+value.pensions2+"</option>"

);

        console.log(value.pensions1)
});
  },
  error: function(xhr) {
    //Do Something to handle error
  }
});
   if(cover ==="ozone"){
       $('#contribution1').append('<option>20 </option>')
   }
})
})
</script>
  </body>

</html>
