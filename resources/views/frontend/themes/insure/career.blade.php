
@extends('frontend.themes.insure.master1')




@section('content')



 <section class="page-title">
          <div class="background-container">
            <img
              class="left-image"
              src="{{asset('themes/tag2/images/background/header-left-bg.png')}}"
              alt=""
            />
            <img
              class="right-image"
              src="{{asset('themes/tag2/images/background/contact-right-bg.png')}}"
              alt=""
            />
          </div>
          <div class="service-container">
            <div class="section-icons-outer parallax-scene-1">
              <div
                data-depth="0.20"
                class="pattern-layer"
                style="background-image: url({{asset('themes/tag2/images/background/pattern-8.png')}})"
              ></div>
            </div>
            @csrf
            <div class="auto-container">
              <h1>Job Opportunity</h1>
              
            </div>
            
          </div>
        </section>
        <!-- End Page Title -->

        <!-- Contact Form Section -->
        <section class="contact-form-section">
          <div class="auto-container">
          <div class="sec-title text-center">
                    <h2 class="">Job Opportunity</h2>
                    <div class="text">
                      Please enter your details we will get in touch 

                    </div>
                  </div>

            <div class="row clearfix">
              <!-- Info Column -->
              
              <!-- Form Column -->
              <div class="form-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="section-icons-outer parallax-scene-3">
                    <div
                      data-depth="0.40"
                      class="pattern-layer"
                      style="
                        background-image: url(images/background/pattern-4.png);
                      "
                    ></div>
                  </div>
                  @if(Session::has('message'))
                                <p class="alert alert-primary">{{Session::get('message')}} </p>

                                @endif
                            @if($errors->any())
                        @foreach($errors as $error)
                        <p class="alert alert-danger">{{$error}} </p>


                        @endforeach
                            @endif
                  <!-- Contact Form -->
                  <div class="contact-form">
                    <form method="post" action="{{route('postcareer')}}" id="contact-form">
                      
                      
                      @csrf
                      <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Enter Your Name*</label>
                        <input
                          type="text"
                          name="name"
                          placeholder="Your name"
                          required
                        />
                      </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label> Education Level*</label>
                        <select class="form-control" name="education_level">
                                                <option value="">Please Select Education Level </option>
                                                    <option>JHS </option>
                                                    <option>SHS </option>
                                                    <option>HND/Diploma </option>
                                                    <option>Graduate </option>
                                                    <option>Others </option>

                                          </select>
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Enter Your Phone Number*</label>
                        <input
                          type="text"
                          name="phone"
                          placeholder="Mobile no"
                          required
                        />
                      </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Enter Your town*</label>
                        <input
                          type="text"
                          name="town"
                          placeholder="Town"
                          required
                        />
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Enter Your Region*</label>
                        <input
                          type="text"
                          name="region"
                          placeholder="Your region"
                          required
                        />
                      </div>
                      </div>

                      
                      </div>
                      

                      
                      <div class="form-group">
                        <button
                          class="theme-btn btn-style-one"
                          type="submit"
                          name="submit-form"
                        >
                          <span class="txt"
                            >Apply Now <i class="fa fa-arrow-circle-right"></i
                          ></span>
                        </button>
                      </div>
                    </form>
                  </div>
                  <!-- eND Contact Form -->
                </div>
              </div>
            </div>
          </div>
        </section>
        @endsection

        <br>
        
        <br>