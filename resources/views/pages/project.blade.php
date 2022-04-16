@extends('layout.master')
@section('section')
  <!-- start page header -->

  <section class="page-header-section">

    <div class="container">

        <div class="row">

            <div class="col-md-12 text-center">

                <div class="paget-title">

                    <h2>Construct <span>Projects</span></h2>

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

                    <li><a href="index-2.html">Home &gt; </a></li>

                    <li class="active">Project</li>

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

<!-- start expericen section -->



<section class="recent-work section-padding" style="background-color: #E3F2FD">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="project-nav">

                   <ul>

                        <li class="active" data-filter="*">All Project</li>

                        <li data-filter=".engineering">engineering</li>

                        <li data-filter=".gas-oil">gas &amp; oil</li>

                        <li data-filter=".industry">industry</li>

                        <li data-filter=".manufature">Manufature</li>

                        <li data-filter=".research">Research</li>

                    </ul>

                </div>

            </div>

        </div>

        <div class="row projectactive">

            <div class="col-md-4 col-lg-3 gas-oil">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-1.jpg')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 engineering">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-2.jpg')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 manufature">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-3.jpg')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 industry gas-oil">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-4.jpg')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 research">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-5.png')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 manufature industry">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-6.png')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 engineering research">

                <div class="single-project">

                    <div class="project-thumb">

                        <a href="project-details.html"><img src="{{asset('asset/img/work-7.png')}}" alt=""></a>

                    </div>

                    <div class="project-desc">

                        <a href="project-details.html"><h4>The Laghum Hotel</h4></a>

                        <p>In answering the ‘why choose us’, I’ve been honest about what we’re about.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 col-lg-3 gas-oil manufature">

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

                    <a href="#" class="btn btn-default button-primary">See All Works</a>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection