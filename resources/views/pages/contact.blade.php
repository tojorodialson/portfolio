@extends('layout.app')
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact Me</h2>
                <div class="page_link">
                    <a href="/">Home</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8 mb-4 mb-lg-0">
                <form class="form-contact contact_form" action="#" method="post" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-lg-3">
                        <button type="submit" class="primary_btn button-contactForm submit-btn">Send Message</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-world"></i></span>
                    <div class="media-body">
                        <h3><a href="https://rtojo.me">rtojo.me</a></h3>
                        <p>Check my website</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:contact@rtojo.me">contact@rtojo.me</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
                <div id="container-80e1381ba0062b910174521d914b5df5"></div>
            </div>
        </div>
    </div>
</section>
@endsection
