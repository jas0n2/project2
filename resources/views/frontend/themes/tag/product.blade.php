
@extends('frontend.themes.tag.master')

@section('top')

<div class="breadcrumb-area" data-bgimage="assets/images/bg/breadcrumb-bg-1.jpg" data-black-overlay="4">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Service Details</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Service Details</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Services Details Area -->
            <div class="services-details-area in-section section-padding-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 pr-0">
                            <div class="service-details-content">
                               
                                <!-- service-details-img -->
                                <div class="service-details-img" data-black-overlay="4">
                                    <img src="{{asset('themes/tag/assets/images/tagmet.png')}}" alt="service Details">
                                </div>
                                <!--// service-details-img -->
                                
                   
                                <div class="car-insurance mt-50">
                                    <div class="frequently-ask-question-area in-section section-padding-lg bg-white">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							
						</div>
					</div>
					<div class="row">
                        <div class="col-lg-12">
                            <div class="faequently-accordion">
                                <!--panel body start-->
                                <h4 class="open">WHAT IS DriveLIFE PLAN ?</h4>
                                <div class="faequently-description">
                                    <p>It’s a Group Life Protection Scheme that encourages regular
savings while enjoying life insurance and retirement benefits
during active work and in retirement.</p>
                                </div>
                                <!--panel body end-->
                                <!--panel body start-->
                                <h4>WHO IS COVERED ?</h4>
                                <div class="faequently-description">
                                    <p>The Driver, Conductor (Driver’s Mate), Union/Association Official
and Fuel Pump Station worker who is in active service and earns
regular income, in good</p>
                                </div>
                                <!--panel body end-->
                                <!--panel body start-->
                                <h4>WHAT IS COVERED ?</h4>
                                <div class="faequently-description">
                                    <img src="{{asset('themes/tag/assets/images/cover.png')}}">
                                </div>
                                <!--panel body end-->
                                <!--panel body start-->
                                <h4>HOW DO I PAY MY PREMIUM ? </h4>
                                <div class="faequently-description">
                                    <p>After a successful registration into the scheme, 
please keep money in your mobile wallet for either
 Daily or Weekly Contributions regularly. 
</p>
                                </div>

                                <h4>HOW TO MAKE A CLAIM ? </h4>
                                <div class="faequently-description">
                                    <p>You can easily file a claim by dialling *724# on your phone to initiate
the claim process and by choosing claim options for Funeral
Benefit, Hospital Admission Cash, Accidental Hospital Cash and
Retirement Benefit.
Valid claims are processed and paid promptly within One (1) week.
</p>
                                </div>
                                <!--panel body end-->
                            </div>
                        </div>
					</div>
				</div>
			</div>

            <div class="car-insurance mt-50">
                                    <h4 class="text-center">TAG Insurance Scheme DriveLIFE Plan</h4>
                                </div>
                             
                    
                                
                                <div class="car-insurance-area mt-50">
                                    
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="in-service-3 mt-30">
                                                <span class="feature-icon">
                                                    <i class="flaticon-life-insurence"></i>
                                                </span>
                                                <h5>FUNERAL BENEFIT</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="in-service-3 mt-30">
                                                <span class="feature-icon">
                                                    <i class="flaticon-mortgage"></i>
                                                </span>
                                                <h5>ADMISION HOSPITAL CASH</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="in-service-3 mt-30">
                                                <span class="feature-icon">
                                                    <i class="flaticon-bars"></i>
                                                </span>
                                                <h5>ACCIDENT HOSPITAL CASH</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="in-service-3 mt-30">
                                                <span class="feature-icon">
                                                    <i class="flaticon-partner"></i>
                                                </span>
                                                <h5>RETIREMENT(PENSION) BENEFIT</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="in-service-3 mt-30">
                                                <span class="feature-icon">
                                                    <i class="flaticon-car"></i>
                                                </span>
                                                <h5>ANNUITY SALARY</h5>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--// Services Details Area -->

        </main>


@endsection