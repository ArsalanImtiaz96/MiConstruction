@extends('layout.master')
@section('section')

   <!-- start slider area -->
   <section class="main-slider-area">
    <div class="active-main-slider owl-carousel">

        <div class="main-slider-item" style="background-image: url({{url('asset/img/slider-2.jpg')}});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">We Make Your <br> Dream Into Reality </h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary. </h2>
                                    <div class="welcome-button" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">
                                        <a href="#" class="btn btn-default button-primary">Get Started</a>
                                        <a href="https://themeforest.net/user/zoomdev" class="btn btn-default button-primary btn-dark">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url({{url('asset/img/home1.jpg')}});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">Trust is just one of the things <br>we build well </h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">The European languages are members of the same family. Their separate existence is a myth. For science, <br> music, sport, etc, Europe uses the same vocabulary. </h2>
                                    <div class="welcome-button" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">
                                        <a href="#" class="btn btn-default button-primary">Get Started</a>
                                        <a href="#" class="btn btn-default button-primary btn-dark">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url({{url('asset/img/slider-3.jpg')}});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">We Make Your Dream <br> Into Reality </h2>
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary. </h2>
                                    <div class="welcome-button" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
                                        <a href="#" class="btn btn-default button-primary">Get Started</a>
                                        <a href="#" class="btn btn-default button-primary btn-dark">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of slider area -->
<!-- start brand slider -->
<div class="brand-slider" style="background-image: url({{url('asset/img/yellow-rake.png')}})">
    <div class="container">
        <div class="row brand-slider-active">
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-1.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-2.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-3.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-4.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-5.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-4.png')}}" alt="">
            </div>
            <div class="single-brand col-md-2 text-center">
                <img src="{{asset('asset/img/brand-5.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- end of brand slider -->
<!-- start experience section -->
<section class="experience-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="experience-content">
                    <h1>We have <br>
                    <span>25</span> Years Experience</h1>
                    <p>offers general contracting services and is mainly located in Arlington, Texas. It has received several awards such as the AGC General Contractor of the Year Award, the Best Of Award from Texas Construction Magazine for Sports / Entertainment Facility Construction.</p>
                    <div class="our-mission-list">
                        <h4>Our Mission & Vision</h4>
                        <p>To maintain the highest levels of professionalism, integrity, honesty and fairness in our relationships with our suppliers.</p>
                        <ul>
                            <li>To perform for our customers the highest level of quality construction services at fair and market competitive prices.
                            </li>
                            <li>To ensure the longevity of our company through repeat and referral business achieved by customer satisfaction.
                            </li>
                            <li>To perform for our customers the highest level of quality construction services at fair and market competitive prices.
                            </li>
                            <li>To maintain the highest levels of professionalism, integrity, honesty and fairness in our relationships with our suppliers.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="single-image">
                    <img src="{{asset('asset/img/man.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of experience section -->
<!-- start counter section -->
<section class="counter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="single-counter">
                    <div class="icon">
                        <i class="icofont icofont-safety-hat"></i>
                    </div>
                    <div class="content">
                        <h4><span class="counter">100</span>+</h4>
                        <p>Experience Enginner</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-counter">
                    <div class="icon">
                        <i class="icofont icofont-vehicle-trucktor"></i>
                    </div>
                    <div class="content">
                        <h4><span class="counter">250</span>+</h4>
                        <p>Own Machine</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-counter">
                    <div class="icon">
                        <i class="icofont icofont-building-alt"></i>
                    </div>
                    <div class="content">
                        <h4><span class="counter">1000</span>+</h4>
                        <p>Projects Done</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single-counter">
                    <div class="icon">
                        <i class="icofont icofont-trophy"></i>
                    </div>
                    <div class="content">
                        <h4><span class="counter">150</span>+</h4>
                        <p>Award Won</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of counter section -->
<!-- start services section -->
<section class="services-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>The Services</h2>
                    <p>We Provide</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-industries-alt-2"></i>
                    </div>
                    <div class="content">
                        <h4>Consulting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-chart-histogram"></i>
                    </div>
                    <div class="content">
                        <h4>Analytics & Research</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-people"></i>
                    </div>
                    <div class="content">
                        <h4>Construction Management</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-chair"></i>
                    </div>
                    <div class="content">
                        <h4>Digital Enterprise</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-man-img text-center">
                    <img src="{{asset('asset/img/man-center.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-architecture-alt"></i>
                    </div>
                    <div class="content">
                        <h4>Engineering & Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-industries-alt-4"></i>
                    </div>
                    <div class="content">
                        <h4>Designing & Building</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-worker"></i>
                    </div>
                    <div class="content">
                        <h4>Program Management</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="single-services">
                    <div class="icon">
                        <i class="icofont icofont-engineer"></i>
                    </div>
                    <div class="content">
                        <h4>Safety management</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of services section -->
<!-- start why choose section -->
<section class="why-choose-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Why Choose Us</h2>
                    <p>We’ve built a reputation in the market through years of delivering quality
                        <br> services, on time, with competitive pricing.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-focus"></i>
                    </div>
                    <div class="content">
                        <h4>We focus on you.</h4>
                        <p>We will make your building construction project proceed in </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-money-bag"></i>
                    </div>
                    <div class="content">
                        <h4>Cost Efficient</h4>
                        <p>Our approach to safety and regulatory compliance has enabled us to grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-news"></i>
                    </div>
                    <div class="content">
                        <h4>Dependability</h4>
                        <p>Our approach to safety and regulatory compliance has enabled us to grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-cheer-leader"></i>
                    </div>
                    <div class="content">
                        <h4>Project Leadership</h4>
                        <p>Our approach to safety and regulatory compliance has enabled us to grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-safety"></i>
                    </div>
                    <div class="content">
                        <h4>Impeccable Safety </h4>
                        <p>Our approach to safety and regulatory compliance has enabled us to grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single-why-choose">
                    <div class="icon">
                        <i class="icofont icofont-vehicle-cement"></i>
                    </div>
                    <div class="content">
                        <h4>Reputation</h4>
                        <p>Our approach to safety and regulatory compliance has enabled us to grow.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of why choose section -->
<!-- start recent work section -->
<section class="recent-work section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Recent Work</h2>
                    <p>We Completed</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Construction Management</h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Roofing & Flooring Services</h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Building Information</h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-4.jpg')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Reconstruction Services</h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-5.png')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Working on the new case </h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-6.png')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>Desert Villa </h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-7.png')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>My desk on friday </h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="single-project">
                    <div class="project-thumb">
                        <a href="project-details.html"><img src="{{asset('asset/img/work-8.png')}}" alt=""></a>
                    </div>
                    <div class="project-desc">
                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>
                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="load-more-button">
                    <a href="project.html" class="btn btn-default button-primary">See All Works</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of recent work section -->
<!-- start testimonial section -->
<section class="testimonial-section section-padding">
    <div class="foroverlay"></div>
    <div class="container">
        <div class="row align-middle">
            <div class="col-md-4">
                <div class="testimonial-title">
                    <h1>OUR <br>
<span>CLIENT</span> TESTIMONIAL</h1>
                    <p>It has roots in a piece of classical Latin literature from 45 BC, making it</p>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <div class="testimonial-slider-active">
                    <div class="single-testimonial-slider">
                        <div class="testimoial-image">
                            <img src="{{asset('asset/img/testimonial.png')}}" alt="">
                        </div>
                        <div class="testimonial-client-title">
                            <h4>Kutkur Ea</h4>
                            <p>CEO, Founder</p>
                        </div>
                        <div class="testimonail-comment">
                            <span class="left-quote"><i class="icofont icofont-quote-left"></i></span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                            <span class="right-quote"><i class="icofont icofont-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="testimoial-image">
                            <img src="{{asset('asset/img/testimonial.png')}}" alt="">
                        </div>
                        <div class="testimonial-client-title">
                            <h4>John Smith</h4>
                            <p>CEO, Founder</p>
                        </div>
                        <div class="testimonail-comment">
                            <span class="left-quote"><i class="icofont icofont-quote-left"></i></span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                            <span class="right-quote"><i class="icofont icofont-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of testimonial section -->
<!-- start our blog section -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>The Blog</h2>
                    <p>Latest Updated</p>
                </div>
            </div>
        </div>
        <div class="row blog-slider-active">
            <div class="col-md-4">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <a href="single.html"> <img src="{{asset('asset/img/blog-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-title">
                        <div class="date">
                            <h4>30 <span>jan</span></h4>
                        </div>
                        <div class="blog-desc">
                            <a href="single.html"><h3>How To Increase Safety In Construction Work</h3></a>
                            <p>There are many variations of passages of Lor Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <a href="single.html" class="read-more">Read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <a href="single.html"> <img src="{{asset('asset/img/blog-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-title">
                        <div class="date">
                            <h4>30 <span>jan</span></h4>
                        </div>
                        <div class="blog-desc">
                            <a href="single.html"><h3>Different Kind Of Mordern Building</h3></a>
                            <p>There are many variations of passages of Lor Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <a href="single.html" class="read-more">Read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <a href="single.html"> <img src="{{asset('asset/img/blog-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-title">
                        <div class="date">
                            <h4>30 <span>jan</span></h4>
                        </div>
                        <div class="blog-desc">
                            <a href="single.html"><h3>Our Latest Construction Machinaries</h3></a>
                            <p>There are many variations of passages of Lor Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <a href="single.html" class="read-more">Read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <a href="single.html"> <img src="{{asset('asset/img/blog-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-title">
                        <div class="date">
                            <h4>30 <span>jan</span></h4>
                        </div>
                        <div class="blog-desc">
                            <a href="single.html"><h3>Different Kind Of Mordern Building</h3></a>
                            <p>There are many variations of passages of Lor Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <a href="single.html" class="read-more">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of blog section -->

@endsection