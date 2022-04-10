@extends('frontend.themes.insure.master')

@section('title')
HOME | LICMIA 

@endsection


@section('content')
<style>
.wrimagecard{	
	margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.wrimagecard .fa{
	position: relative;
    font-size: 70px;
}
.wrimagecard-topimage_header{
padding: 20px;
}
a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
}
.wrimagecard-topimage a {
    width: 100%;
    height: 100%;
    display: block;
}
.wrimagecard-topimage_title {
    padding: 20px 24px;
    height: 80px;
    padding-bottom: 0.75rem;
    position: relative;
}
.wrimagecard-topimage a {
    border-bottom: none;
    text-decoration: none;
    color: #525c65;
    transition: color 0.3s ease;
}

h4 {
    line-height: 1.4em;
    /* font-weight: 700; */
    font-size: 22px !important;
}

</style>
<section class="main-slider">
          <div class="auto-container">
            <div class="slider-icons-outer parallax-scene-1">
              <div
                data-depth="0.20"
                class="pattern-layer"
                style="background-image: url({{asset('themes/tag2/images/main-slider/pattern-1.png')}})"
              ></div>
              <div
                data-depth="0.40"
                class="pattern-layer-two"
                style="background-image: url({{asset('themes/tag2/images/main-slider/pattern-2.png')}})"
              ></div>
              <div
                data-depth="0.40"
                class="pattern-layer-three"
                style="background-image: url({{asset('themes/tag2/images/main-slider/pattern-3.png')}})"
              ></div>
              <div
                class="pattern-layer-four"
                style="background-image: url({{asset('themes/tag2/images/main-slider/pattern-4.png')}})"
              ></div>
              <div
                class="pattern-layer-six"
                style="background-image: url({{asset('themes/tag2/images/main-slider/pattern-6.png')}})"
              ></div>
            </div>
            <div class="main-slider-carousel owl-carousel owl-theme">
              <!-- Slide 01 -->
              <div class="slide">
                <div class="row clearfix">
                  <!-- Content Column -->
                  <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                      <div class="title">WELCOME TO DriveLIFE</div>
                      <h1>We are specialized in making 
    lives of our customers better 
</h1>
                      
                      <div class="btns-box clearfix">
                        <a class="btn-style-one theme-btn" href="about.html"
                          ><span class="txt"
                            >Read More
                            <i class="fa fa-arrow-circle-right"></i></span
                        ></a>
                        <a
                          href="https://www.youtube.com/watch?v=kxPCFljwJws"
                          class="lightbox-image video-box"
                          ><span class="fa fa-play"><i class="ripple"></i></span
                        ></a>
                      </div>
                      <div
                        class="slide-arrow scroll-to-target"
                        data-target=".about-section"
                      >
                        <img src="{{asset('themes/tag2/images/icons/slider-arrow.png')}}" alt="" />
                      </div>
                    </div>
                  </div>

                  <!-- Image Column Start-->
                  <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div
                      class="pattern-layer-five"
                      style="
                        background-image: url({{asset('themes/tag2/images/main-slider/pattern-5.png')}});
                      "
                    ></div>
                    <div class="inner-column">
                      <div class="image">
                        <img
                          src="{{asset('themes/tag2/images/slider1.png')}}"
                          alt=""
                          width="817px"
                          height="411px"
                        />
                      </div>
                    </div>
                  </div>
                  <!-- Image Column End-->
                </div>
              </div>
              <!-- End Slide 01 -->

              <!-- Slide 02 -->
              <div class="slide">
                <div class="row clearfix">
                  <!-- Content Column -->
                  <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                      <div class="title">WELCOME TO CARSORE</div>
                      <h1>2.	TAG Insurance Scheme
    DriveLIFE Plan 
r 
</h1>
                      
                      <div class="btns-box clearfix">
                        <a class="btn-style-one theme-btn" href="about.html"
                          ><span class="txt"
                            >Read More
                            <i class="fa fa-arrow-circle-right"></i></span
                        ></a>
                       
                      </div>
                      <div
                        class="slide-arrow scroll-to-target"
                        data-target=".about-section"
                      >
                        <img src="{{asset('themes/tag2/images/icons/slider-arrow.png')}}" alt="" />
                      </div>
                    </div>
                  </div>

                  <!-- Image Column -->
                  <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div
                      class="pattern-layer-five"
                      style="
                        background-image: url({{asset('themes/tag2/images/main-slider/pattern-5.png')}});
                      "
                    ></div>
                    <div class="inner-column">
                      <div class="image">
                        <img
                          src="{{asset('themes/tag2/images/slider2.png')}}"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Slide 02 -->

              <!-- Slide 03 -->
              <div class="slide">
                <div class="row clearfix">
                  <!-- Content Column -->
                  <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                      <div class="title">WELCOME TO CARSORE</div>
                      <h1>Get Your Car Insurance Within Minutes</h1>
                      <div class="text">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.Lorem Ipsum has
                      </div>
                      <div class="btns-box clearfix">
                        <a class="btn-style-one theme-btn" href="about.html"
                          ><span class="txt"
                            >Read More
                            <i class="fa fa-arrow-circle-right"></i></span
                        ></a>
                        <a
                          href="https://www.youtube.com/watch?v=kxPCFljwJws"
                          class="lightbox-image video-box"
                          ><span class="fa fa-play"><i class="ripple"></i></span
                        ></a>
                      </div>
                      <div
                        class="slide-arrow scroll-to-target"
                        data-target=".about-section"
                      >
                        <img src="{{asset('themes/tag2/images/icons/slider-arrow.png')}}" alt="" />
                      </div>
                    </div>
                  </div>

                  <!-- Image Column -->
                  <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div
                      class="pattern-layer-five"
                      style="
                        background-image: url({{asset('themes/tag2/images/main-slider/pattern-5.png')}});
                      "
                    ></div>
                    <div class="inner-column">
                      <div class="image">
                        <img
                          src="{{asset('themes/tag2/images/main-slider/content-image.png')}}"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Slide 03 -->
            </div>
          </div>
        </section>
        <!-- End Main Slider Section -->

        <!-- About Section -->
        <section
          class="about-section"
          style="background-image: url({{asset('themes/tag2/images/background/pattern-2.png')}})"
        >
          <!-- <div
            class="top-pattern-layer"
            style="background-image: url(images/background/pattern-1.png)"
          ></div> -->
          <div class="auto-container">
            <div class="inner-container">
              <div class="section-icons-outer parallax-scene-2">
                <div
                  data-depth="0.20"
                  class="icon-layer-one"
                  style="background-image: url({{asset('themes/tag2/images/images/icons/icon-1.png')}})"
                ></div>
              </div>
              <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-column">
                    <div class="image titlt" data-tilt data-tilt-max="2">
                      <img src="{{asset('themes/tag/assets/images/tag.png')}}" alt="" />
                      <span class="triangle-one"></span>
                      <span class="triangle-two"></span>
                    </div>
                  </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-column">
                    <div class="sec-title light">
                      <div class="title">Akwaba to DriveLIFE Insurance Scheme</div>
                      <h2>Akwaba to DriveLIFE Insurance Scheme
</h2>
                    </div>
                    <div class="bold-text">
                    DriveLIFE is a Group Life Protection Scheme that encourages regular savings while enjoying life insurance and retirement benefits during active work and in retirement.
                    </div>
                    
                    <div class="author-box clearfix">
                      <div class="box-inner">
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About Section -->

        <!-- Services Section -->
        <section class="services-section">
          <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
              <h2>
              DriveLIFE Plan Includes <br />
               
              </h2>
            </div>
            <div class="container-fluid">
	<div class="row">
	<div class="col-md-4 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
            <center><i class="fa fa-umbrella" style="color:#BB7824"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>FUNERAL
BENEFIT

            <div class="pull-right badge"></div></h4>
          </div>
        </a>
      </div>
      </div>
    <div class="col-md-4 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
            <center><i class = "fa fa-hospital" style="color:#16A085"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>ADMISION HOSPITAL CASH

            <div class="pull-right badge" id="WrControls"></div></h4>
          </div>
        </a>
      </div>
</div>
<div class="col-md-4 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
            <center><i class="fa fa-car-crash" style="color:#d50f25"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4>ACCIDENT HOSPITAL CASH

            <div class="pull-right badge" id="WrForms"></div>
            </h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-4 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
             <center><i class="fa fa-table" style="color:#3369e8"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>RETIREMENT  BENEFIT

            <div class="pull-right badge" id="WrGridSystem"></div></h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-4 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(250, 188, 9, 0.1)">
             <center><i class="fa fa-money-bill" style="color:#fabc09"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>ANNUITY SALARY

            <div class="pull-right badge" id="WrInformation"></div></h4>
          </div>
         
        </a>
      </div>
	</div>
	
</div>
</div>
        </section>
        <!-- End Services Section -->

        <!-- Choose Section -->
        <section class="insurance-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title light centered">
            <h2>Get Signup using the following Steps</h2>
            <div class="text">
              Our USSD code*724#  is Fast and easy to use 
            </div>
          </div>
          <!-- End Sec Title -->
          <div class="inner-container">
            <div class="section-icons-outer parallax-scene-8">
              <div
                data-depth="0.20"
                class="icon-layer"
                style="background-image: url(images/icons/icon-1.png)"
              ></div>
              <div
                data-depth="0.40"
                class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"
              ></div>
              <div
                data-depth="0.20"
                class="pattern-layer-two"
                style="background-image: url(images/background/pattern-4.png)"
              ></div>
            </div>
            <div class="row clearfix">
              <!-- Insurance Block -->
              <div class="insurance-block col-lg-3 col-md-6 col-sm-12">
                <div
                  class="inner-box wow fadeInLeft"
                  data-wow-delay="0ms"
                  data-wow-duration="1500ms"
                >
                  <div class="icon-box">
                    <span class="icon flaticon-phone"></span>
                  </div>
                  <h5>
                    <a href="insurance-form.html">Simply Dial *724#</a>
                  </h5>
                  <div class="text">
                  on your mobile phone for Self Sign-up or use Agent Assisted Sign-up
                  </div>
                </div>
              </div>

              <!-- Insurance Block -->
              <div class="insurance-block col-lg-3 col-md-6 col-sm-12">
                <div
                  class="inner-box wow fadeInLeft"
                  data-wow-delay="150ms"
                  data-wow-duration="1500ms"
                >
                  <div class="icon-box">
                    <span class="icon flaticon-customer-support"></span>
                  </div>
                  <h5>
                    <a href="insurance-form.html">Then select Sign up option</a>
                  </h5>
                  <div class="text">
                  on your personal details and the menu for Next of kin.
                  </div>
                </div>
              </div>

              <!-- Insurance Block -->
              <div class="insurance-block col-lg-3 col-md-6 col-sm-12">
                <div
                  class="inner-box wow fadeInLeft"
                  data-wow-delay="300ms"
                  data-wow-duration="1500ms"
                >
                  <div class="icon-box">
                    <span class="icon flaticon-clipboard-1"></span>
                  </div>
                  <h5>
                    <a href="insurance-form.html">Choose your Auto-debit Contributions</a>
                  </h5>
                  <div class="text">
                  Option and Payment Plan.
                  </div>
                </div>
              </div>

              <!-- Insurance Block -->
              <div class="insurance-block col-lg-3 col-md-6 col-sm-12">
                <div
                  class="inner-box wow fadeInLeft"
                  data-wow-delay="450ms"
                  data-wow-duration="1500ms"
                >
                  <div class="icon-box">
                    <span class="icon flaticon-tags"></span>
                  </div>
                  <h5><a href="insurance-form.html">Choose your Retirement Contribution amount</a></h5>
                  <div class="text">
                  and Enter Retirement period.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- End Choose Section -->

        <!-- Team Section -->
   
        <!-- End Team Section -->

        <!-- Faq's Section -->
        <section class="faq-section">
          <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
              <div class="title">faq</div>
              <h2>Frequently Asked Questions</h2>
            </div>
            <!-- End Sec Title -->
            <div class="inner-container">
              <div class="section-icons-outer parallax-scene-6">
                <div
                  data-depth="0.20"
                  class="icon-layer"
                  style="background-image: url({{asset('themes/tag2/images/icons/icon-1.png')}})"
                ></div>
                <div
                  data-depth="0.40"
                  class="pattern-layer"
                  style="background-image: url({{asset('themes/tag2/images/background/pattern-3.png')}})"
                ></div>
              </div>
              <div class="row clearfix">
                <!-- Accordion Column -->
                <div class="accordion-column col-lg-6 cl-md-12 col-sm-12">
                  <div class="inner-column">
                    <!-- Accordian Box -->
                    <ul class="accordion-box">
                      <!--Block-->
                      <li class="accordion block">
                        <div class="acc-btn">
                          <div class="icon-outer">
                            <span class="icon icon-plus fa fa-plus"></span>
                            <span class="icon icon-minus fa fa-minus"></span>
                          </div>
                          Who can buy Drive LIFE Plan?
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">
                            Ans. The subscriber must be a member of Commercial Transport Unoin/Association or Fuel Pump Station Worker aged 18 years and above and earns regular income. He or she must be residing in Ghana when signing up for the Plan.
                            </div>
                          </div>
                        </div>
                      </li>

                      <!--Block-->
                      <li class="accordion block active-block">
                        <div class="acc-btn active">
                          <div class="icon-outer">
                            <span class="icon icon-plus fa fa-plus"></span>
                            <span class="icon icon-minus fa fa-minus"></span>
                          </div>
                          2. Is Medical Examination or Health proof required when signing up for the Plan?
                        </div>
                        <div class="acc-content current">
                          <div class="content">
                            <div class="text">
                            Ans. No medical examination is required; however, the subscriber need to proof he or she is in good state of health when signing up for the Plan.
                            </div>
                          </div>
                        </div>
                      </li>

                      <!--Block-->
                      <li class="accordion block">
                        <div class="acc-btn">
                          <div class="icon-outer">
                            <span class="icon icon-plus fa fa-plus"></span>
                            <span class="icon icon-minus fa fa-minus"></span>
                          </div>
                          3. Can I purchase DriveLIFE Plan for my family members?
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">
                            Ans. No. You can’t purchase DriveLIFE Plan for your family members. DriveLIFE Plan is Group Life Insurance with Retirement Savings Plan for commercial transport drivers, mates, union officials and Fuel Pump Station Workers in Ghana. The policyholder can nominate one family member for Life insurance cover (Funeral benefit) only.
                            </div>
                          </div>
                        </div>
                      </li>

                      <!--Block-->
                      
                    </ul>
                  </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                  <div
                    class="inner-column wow fadeInRight"
                    data-wow-delay="0ms"
                    data-wow-duration="1500ms"
                  >
                    <div class="image">
                      <span class="triangle-one"></span>
                      <span class="triangle-two"></span>
                      <img src="{{asset('themes/tag2/images/faq.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Faq's Section -->

        <!-- Testimonial Section -->
       
        <!-- End Testimonial Section -->

        <!-- Awards Section -->
      
        <!-- End Awards Section -->

        <!-- News Section -->
        <section class="news-section">
          <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
              <div class="title">Our blog</div>
              <h2>Read Our Daily Blog</h2>
            </div>
            <!-- End Sec Title -->
            <div class="inner-container">
              <div class="section-icons-outer parallax-scene-9">
                <div
                  data-depth="0.20"
                  class="icon-layer"
                  style="background-image: url(images/icons/icon-1.png)"
                ></div>
                <div
                  data-depth="0.20"
                  class="pattern-layer"
                  style="background-image: url(images/background/pattern-4.png)"
                ></div>
              </div>
              <div class="row clearfix">
                <!-- News Block -->
               <p class="text-center">Loading.... </p>
                </div>

               
              </div>
            </div>
          </div>
        </section>
        <!-- End News Section -->

        <!-- Clients Section -->
        <section class="clients-section">
          <div class="auto-container">
            <div class="section-icons-outer parallax-scene-10">
              <div
                data-depth="0.50"
                class="pattern-layer"
                style="background-image: url(images/background/pattern-3.png)"
              ></div>
            </div>
            <div class="carousel-outer">
              <!--Sponsors Slider-->
              <ul class="sponsors-carousel owl-carousel owl-theme">
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/1.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/2.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/3.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/4.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/5.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/1.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/2.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/3.png" alt="" /></a>
                  </div>
                </li>
                <li>
                  <div class="image-box">
                    <a href="#"><img src="images/clients/4.png" alt="" /></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>

@endsection