@extends('layout.app')
@section('content')
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <div class="banner_content mt-5">
                        <h3>Hey There !</h3>
                        <h1 class="text-uppercase">I'm Tojo RODIALSON</h1>
                        <h5 class="text-uppercase">Backend Developer</h5>
                        <div class="social_icons my-5">
                            <a href="mailto:contact@rtojo.me"><i class="ti-email"></i></a>
                            <a href="https://linkedin.com/tojorodialson" target="_blank"><i class="ti-linkedin"></i></a>
                        </div>
                        <a class="primary_btn" href="#portfolio"><span>See My Work</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home_right_img mt-5">
                        <img class="img-fluid" src="{{asset('assets/img/banner/home-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="statistics_area">
    <div class="container">
        <div class="row justify-content-lg-start justify-content-center">
            <div class="col-lg-2 col-md-3">
                <div class="statistics_item">
                    <h3><span class="counter">99</span>%</h3>
                    <p>Happy Customer</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="statistics_item">
                    <h3><span class="counter">98</span>%</h3>
                    <p>Ticket Solved</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="statistics_item">
                    <h3><span class="counter">9</span>/10</h3>
                    <p>Average Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_area section_gap" id="about">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="{{asset('assets/img/about-us.png')}}" width="660" height="549" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <p class="top_text">About me <span></span></p>
                    <h2>Backend Developer <br/>and CTO HoMyJob</h2>
                    <p>
                        I'm <b>Tojo RODIALSON</b>, backend developer since 2014. I choose this job because I have a passion for codes.
                        <br/>I've been working on different projects in recent years to always improve how to code and meet different people.
                        <br/>For me, an opportunity is to contribute to a new project and work on a new structure.
                        <br/>Everyday I speak <b>PHP</b> and work on <b>Laravel</b> a big structure. If one day, I'll must speak <b>C#</b> or <b>Java</b>, I'll be very happy :)
                        <br/>To finish, each line of code must be good quality to be readable by all.
                    </p>
                    <a class="primary_btn" href="/contact"><span>Hire me</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services_area" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <p class="top_text">My Services <span></span></p>
                    <h2>What services could I <br>provide you</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="{{asset('assets/img/services/s1.png')}}" alt="">
                    <h4>Web Development</h4>
                    <p>Development of the engine architecture of your project. From the database to the features necessary.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="{{asset('assets/img/services/s2.png')}}" alt="">
                    <h4>Ideas</h4>
                    <p>Bring the necessary solutions for optimize your project. Provide support, security, and content management.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="{{asset('assets/img/services/s3.png')}}" alt="">
                    <h4>Code Quality</h4>
                    <p>Make sure that the website opens up and functioning properly. Code optimization and bug fixes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <p class="top_text">My Portfolio <span></span></p>
                    <h2>Check My Work</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <p>In progress...</p>
            </div>
        </div>
    </div>
</section>
@endsection
