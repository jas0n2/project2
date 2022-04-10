
@extends('frontend.themes.tag.master')


@section('content')

       <!-- Features Area -->
                <!-- Breadcrumb -->
        <div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-1.jpg" data-black-overlay="4">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul>
                                <li>Career page</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Career page</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Contact Area -->
            <div class="contact-area in-section section-padding-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h6>CONTACT US AT ANY TIME</h6>
                                <h2>Job Opportunity</h2>
                            </div>
                        </div>
                    </div>
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
                                <form id="contact-form" action="{{route('postcareer')}}" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="name" placeholder=" Name *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="dob" placeholder="Date of Birth *" type="date">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
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
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="phone" placeholder="Mobile no *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="email" placeholder="Email *" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="town" placeholder="Town *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input name="region" placeholder="region*" type="text">
                                            </div>
                                        </div>
                                        @csrf

                                        
                                        
                                       
                                    </div>
                                    <div class="contact-submit-btn text-center">
                                        <button type="submit" class="submit-btn default-btn">SUBMIT NOW</button>
                                    </div>
                                </form>
                            </div>
                            <!-- contact-form-warp End -->
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="map-area section-padding-top-lg">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Services Area -->

        </main

@endsection