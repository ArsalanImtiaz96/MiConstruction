@extends('layout.master')
@section('section')
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                    <h2>Construct <span>Services</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left">
                <ol class="breadcrumb">
                    <li><a href="/">Home &gt; </a></li>
                    <li class="active">Services</li>
                </ol>
            </div>
            <div class="col-md-4 text-right">
                <div class="get-in-touch-btn">
                    <a href="#">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<!-- start contact us section -->
<section class="contact-us-section padding-top">
    <div class="container">
        <div class="row">

        </div>
        <div class="row justify-content-center contactformbg">
            <div class="col-md-12 text-center">
                <div class="get-in-touch">
                    <h4>Get In Touch</h4>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="contact-address">
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-phone"></i>
                        </div>
                        <div class="content">
                            <p>+1 763-227-5032</p>
                            <p>+1 763-227-5032</p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-envelope"></i>
                        </div>
                        <div class="content">
                            <p>info@domainname.com</p>
                            <p>construction@gmail.com</p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-social-google-map"></i>
                        </div>
                        <div class="content">
                            <p>2752 Willison Street</p>
                            <p>Eagan, MN 55121, United State</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-5">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-input">
                                <label for="fname">First name</label>
                                <input id="fname" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <label for="lname">Last name</label>
                                <input id="lname" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input">
                                <label for="email">Email</label>
                                <input id="email" type="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-input">
                                <label for="message">Message</label>
                                <textarea id="message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                         <div class="col-md-12 text-left">
                            <div class="submitbtn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of contact us section -->
<!-- start google map section -->
<div class="googlemap">
    <div id="gmap"></div>
</div>
<!-- end of google map section -->
@endsection