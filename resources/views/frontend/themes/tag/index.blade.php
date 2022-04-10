@section('title')
 HOME | LICMIA 
@endsection
@extends('frontend.themes.tag.master')
    <link rel="stylesheet" href="{{asset('themes/tag/assets/css/price.css')}}"/>

    <style>
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
.wrapper{  margin: 0 auto;  background-color: #bdd3de; hoverflow: hidden;}
      </style>
@section('top')

<div class="heroslider-area in-sliderarrow">

@foreach($slides as $slide)
<!-- Hero Slider Single -->
<div class="heroslider animated-heroslider d-flex align-items-center" data-bgimage="{{asset('sliders/'.$slide->image)}}" data-secondary-overlay="8">
 

{!!$slide->content !!} 

            </div>


@endforeach
<!--// Hero Slider Single -->

<!-- Hero Slider Single -->

<!--// Hero Slider Single -->

</div>
@endsection

@section('content')

<!-- Features Area -->
<div class="features-area in-section section-padding-lg bg-white">
<div class="container">
<div class="section-title text-center">
<h2>Akwaba to DriveLIFE Insurance Scheme</h2>
<h6>“It’s all about you”</h6>

</div>
<div class="col-md-6 offset-md-3">
<p class="text-center">DriveLIFE is a Group Life Protection Scheme that encourages regular
savings while enjoying life insurance and retirement benefits
during active work and in retirement. </p>

</div>
<div class="row align-items-center">
    
<div class="col-lg-6">
<h2>We Cover </h2>
<div class="features-wrapper-2">
<div class="in-feature">
<span class="in-feature-icon">
<i class="flaticon-lock"></i>
</span>
<h4>FUNERAL   </h4>
<p>On the death of a member, a fixed cash lump sum of
GHC 3,000, GHC 4,000 or GHC 5,000 is payable to the beneficiaries and
GHC1,500, GHC2,000 and GHC2,500 on the death of the nominated family
member.</p>
</div>
<div class="in-feature">
<span class="in-feature-icon">
<i class="flaticon-lab"></i>
</span>
<h4>HOSPITALIZATION   </h4>
<p>single lump sum of GHC 300, GHC 400 or GHC
500 is payable per eligible period of hospitalization of at least three (3)
nights by a member.. <a>Read More</a></p>
</div>
<div class="in-feature">
<span class="in-feature-icon">
<i class="flaticon-partner"></i>
</span>
<h4>ACCIDENT   </h4>
<p>A single lump sum benefit of GHS
1,400, GHS 1,800, GHS 2,200 is payable per eligible period of
hospitalization of at least three (3) nights as a result of serious accident
requiring medical admission and treatment..</p>
</div>

</div>
</div>
<div class="col-lg-6">
<div class="feature-videobox" data-bgimage="">
<img src="{{asset('themes/tag/assets/images/tag.png')}}" alt="man with umbrella">

</div>
</div>
</div>
</div>
</div>
<!--// Features Area -->

<!-- Working Progress Area -->
<div class="working-progress-area in-section section-padding-lg bg-shape-2">
<div class="container">

<div class="gradation-process-area in-section section-padding-top-lg">
<div class="container">

<div class="row">
<div class="col-lg-6 m-auto">
<div class="section-title text-center">
<h2>How it works</h2>
</div>

</div>
</div>

<div class="row">
<div class="col-lg-12">
<div class="works-prsseage-stap">
<!-- Single item gradation Start -->
<div class="item item-1 animate">
<div class="line"></div>
<div class="circle-wrap">
<div class="mask">
<div class="wave-pulse wave-pulse-1"></div>
<div class="wave-pulse wave-pulse-2"></div>
<div class="wave-pulse wave-pulse-3"></div>
</div>

<h6 class="circle">1</h6>
</div>

<div class="content-wrap">

<div class="wrapper">
      <div class="col_third">
        <div class="hover panel">
          <div class="front">
            <div class="box1">
              <p>Front Side</p>
            </div>
          </div>
          <div class="back">
            <div class="box2">
              <p>Back Side</p>
            </div>
          </div>
        </div>
		</div>
    </div>

</div>
</div>
<!-- Single item gradation End -->
<div class="item item-1 animate">
<div class="line"></div>
<div class="circle-wrap">
<div class="mask">
<div class="wave-pulse wave-pulse-1"></div>
<div class="wave-pulse wave-pulse-2"></div>
<div class="wave-pulse wave-pulse-3"></div>
</div>

<h6 class="circle">2</h6>
</div>

<div class="content-wrap">

<h4 class="heading">Then select Sign up option</h4>

<div class="text">on your personaldetails and the menu for Next of kin.</div>

<a class="gradation-btn" href="#">
</a>
</div>
</div>
<div class="item item-1 animate">
<div class="line"></div>
<div class="circle-wrap">
<div class="mask">
<div class="wave-pulse wave-pulse-1"></div>
<div class="wave-pulse wave-pulse-2"></div>
<div class="wave-pulse wave-pulse-3"></div>
</div>

<h6 class="circle">3</h6>
</div>

<div class="content-wrap">

<h4 class="heading">Choose your Auto-debit Contributions</h4>

<div class="text">Option and Payment Plan.</div>

<a class="gradation-btn" href="#">
</a>
</div>
</div>
<!-- Single item gradation Start -->
<div class="item item-1 animate">
<div class="line"></div>
<div class="circle-wrap">
<div class="mask">
<div class="wave-pulse wave-pulse-1"></div>
<div class="wave-pulse wave-pulse-2"></div>
<div class="wave-pulse wave-pulse-3"></div>
</div>

<h6 class="circle">4</h6>
</div>

<div class="content-wrap">

<h4 class="heading">Choose your Retirement Contribution amount</h4>

<div class="text">and Enter Retirement period.</div>

<a class="gradation-btn" href="#">

</a>
</div>
</div>
<!-- Single item gradation End -->

<!-- Single item gradation Start -->
<div class="item item-1 animate">
<div class="line"></div>
<div class="circle-wrap">
<div class="mask">
<div class="wave-pulse wave-pulse-1"></div>
<div class="wave-pulse wave-pulse-2"></div>
<div class="wave-pulse wave-pulse-3"></div>
</div>

<h6 class="circle">5</h6>
</div>

<div class="content-wrap">

<h4 class="heading">Confirm your Auto-debit deductions</h4>

<div class="text"></div>

<a class="gradation-btn" href="#">

</a>
</div>
</div>
<!-- Single item gradation End -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--// Working Progress Area -->

<!-- Services Area -->
<!--// Services Area -->

<!-- Callback Area -->
<div class="callback-area in-section section-padding-lg bg-image-4">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6">
<div class="callback-content">
<h4>Plan Calculator</h4>
<form class="callback-form" id="calculator">
<div class="row">
<div class="col-lg-12 mt-30">
<select class="form-control" id="cover">
<option value="">Please Select Cover </option>
@foreach($cover as $c)
<option  value="{{$c->id}}">{{$c->cover_name}} - ghc {{$c->lifecover}}</option>
@endforeach


</select>

</div>
<div class="col-lg-12 mt-30">
<select class="form-control" id="type">
<option value="">Contribution Type </option>
<option>Daily</option>
<option>Weekly  </option>

</select>
</div>
<div class="col-lg-12 mt-30">
<select class="form-control" id="contribution1">
<option  value="">Retirement Contribution Options </option>


</select>
</div>
<div class="col-lg-12 mt-30">
<input type="number" id="nooo"  placeholder="Years to Retirement">
</div>
<div class="col-lg-6 mt-30">
<button type="submit" id="calculate" class="in-button in-button-white">Calculate</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="callback-content">
<h4 class="htitle">Request A callback</h4>

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
  <div class="cv-spinner" style="display:none">
    <span class="spinner"></span>
  </div>
    <form class="callback-form cal">
   
<div class="row">
<div class="col-lg-6 mt-30" >
<input type="text" placeholder="Type your insurance category *">
</div>

<div class="col-lg-6 mt-30">
<input type="text" placeholder="Name*">
</div>
<div class="col-lg-6 mt-30">
<input type="email" placeholder="Email*">
</div>
<div class="col-lg-6 mt-30">
<input type="text" placeholder="Phone*">
</div>
<div class="col-lg-6 mt-30">
<button type="submit" class="in-button in-button-white">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!--// Callback Area -->

<!-- Team Members -->

<!--// Team Members -->

<!-- Blog Area -->
<div class="blogs-area in-section section-padding-lg bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h6>BEST SERVICES FOR YOU</h6>
<h2>Our News Feed</h2>
</div>
</div>
</div>
<div class="row blog-slider-active in-slidearrow">
@if(count($post) <1)
@else
@foreach($post as $post)

<div class="col-lg-4">
<div class="in-blog mt-30">
<div class="in-blog-image">
<a href="#">
<img src="{{asset('themes/tag/assets/images/blog/blog-image-3.jpg')}}" alt="blog image">
</a>
</div>
<div class="in-blog-content">
<div class="in-blog-metatop">
<span>15th sep, 2018</span>
<span><a href="#">Life Insurance</a></span>
</div>
<h4 class="in-blog-title"><a href="#">We are leading insurance
service.</a></h4>
<p>Lorem ipsum dolor sit amet, consecte adipicing elit, sed do eiusmod tempor </p>
<div class="in-blog-authorimage">
<span>
<img src="{{asset('themes/tag/assets/images/blog/author-image/author-image-3.png')}}" alt="author image">
</span>
</div>
<div class="in-blog-metabottom">
<span>By: <a href="#">Admin</a></span>
<span><a href="#"><i class="zmdi zmdi-favorite-outline"></i> Like : 05</a> / <a
href="#"><i class="zmdi zmdi-comment-outline"></i>
Comment</a></span>
</div>
</div>
</div>
</div>
<!--// Single Blog -->
@endforeach
@endif
</div>
</div>
</div>
<!--// Blog Area -->


@endsection


@section('scripts')
<script>
    $(document).ready(function() {
$('#closewind').on('click',function(e){
    e.preventDefault();
    $('.htitle').text('Request A callback')

    $('.cal').show();
    $('#sec-7a6d').hide();

})
$('#choseplam').on('click',function(e){
    e.preventDefault();
    $('.htitle').text('Request A callback')

    $('.cal').show();
    $('#sec-7a6d').hide();

})
        $('#calculate').on('click',function(e){
            e.preventDefault();

            var cover =$('#cover option:selected').val();
            var year = $('#nooo').val();
           
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
      $('.htitle').text('Calculator Results')
    $('#plan').text(response.plan);
    $('#pricetable #typep').html(response.premiumtype);
    $('#pricetable #premium').html("Ghc "+response.premium);
    $('#pricetable #lifepremium').html("Ghc "+response.lpremium);
    $('#pricetable #walletex').html("Ghc "+response.wallet);
    $('#pricetable #penscon').html("Ghc "+response.pensionsCal);

    $('#pricetable #pensionstot').html("Ghc "+response.pensionstotal);
    $('#pricetable #finali').html("Final Pensions Contribution with interest after "+response.years+" years");

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
        $('select').niceSelect();
$('#cover').on('change',function(){
   var cover = $(this).val();
   $('#contribution1').html("<option >Loading...</option>")
   $('#contribution1').niceSelect('update');

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
$('#contribution1').niceSelect('update');

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

@endsection