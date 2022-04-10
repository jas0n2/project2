@extends('frontend.themes.tag.master')

@section('title')
News

@endsection

@section('top')

<main class="page-content">

<!-- Blog Details -->
<div class="blog-details-area section-padding-lg bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
                <div class="row">
                    <!-- Single Blog -->
                    @if(count($posts)>0)
                    @foreach($posts as $post)
                    <div class="col-lg-12">
                        <div class="in-blog mb-30">
                            <div class="in-blog-image-list">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-list-1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="in-blog-content">
                                <div class="in-blog-metatop">
                                    <span>15th sep, 2018</span>
                                    <span><a href="#">Life Insurance</a></span>
                                </div>
                                <h4 class="in-blog-title"><a href="blog-details.html">We are leading insuranceservice.</a></h4>
                                <p>Aquuntu consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labor voluptatem.Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="in-blog-authorimage">
                                    <span>
                                        <img src="assets/images/blog/author-image/author-image-1.png" alt="author image">
                                    </span>
                                </div>
                                <div class="in-blog-metabottom">
                                    <span>By <a href="#">Admin</a></span>
                                    <span><a href="#"><i class="zmdi zmdi-favorite-outline"></i> Like : 05</a> / <a href="#"><i class="zmdi zmdi-comment-outline"></i>
                                            Comment</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h2> Coming Soon </h2>

                    @endif
                    <!--// Single Blog -->

                </div>
                
            </div>
            

                    

                   

                   
                    
                </div>
            </div>
        </div>
    

<!--// Blog Details -->

</main>
@endsection