@extends('layouts.front.master')

@section('title')
    Home
@endsection


@section('content')
    <section id="home-slider">
        <div class="container">
            <div class="main-slider" style="display:none">
                <div class="slide-text">
                    <div class="clearfix"></div>
                    <h1>Welcome to Olotusquare</h1>
                    <p>
                        For us, It's all about community and solutions.
                        We study, research, design, develop and conduct trainings on solution-based projects/technologies.
                    </p>
                    <a href="#contact" class="btn btn-common">Join Us Today</a>
                </div>
                <img src="{{asset('default_assets/images/home/slider/slide1/house.png')}}" class="img-responsive slider-house" alt="slider image">
                
                <img src="{{asset('default_assets/images/home/slider/slide1/circle1.png')}}" class="slider-circle1" alt="slider image">
                <img src="{{asset('default_assets/images/home/slider/slide1/circle2.png')}}" class="slider-circle2" alt="slider image">
                <img src="{{asset('default_assets/images/home/slider/slide1/cloud1.png')}}" class="slider-cloud1" alt="slider image">
                <img src="{{asset('default_assets/images/home/slider/slide1/cloud2.png')}}" class="slider-cloud2" alt="slider image">
                <img src="{{asset('default_assets/images/home/slider/slide1/cloud3.png')}}" class="slider-cloud3" alt="slider image">
                <img src="{{asset('default_assets/images/home/slider/slide1/sun.png')}}" class="slider-sun" alt="slider image">
                <img src="{{asset('default_assets/images/home/cycle.png')}}" class="slider-cycle" alt="">
            </div>
             <div class="main-slider">
                <div class="slide-text">
                    <div class="clearfix"></div>
                    <h1><img src="{{asset('img/update/celebrate.svg')}}" class="img-responsive"/></h1>
                    <p>
                    </p>
                    <!--<a href="#" class="btn btn-common" style="color:white" style="dispaly:none;">Register</a>-->
                </div>
                   <img src="{{asset('img/update/stars.png')}}" class="img-responsive slider-couple" alt="slider image">
               <img src="{{asset('img/update/easter.png')}}" class="img-responsive slider-couple1" alt="slider image">
                
            </div>
            <div class="main-slider wow fadeIn" data-wow-duration="3000ms" style="display:none;" data-wow-delay="1500ms">
                <div class="slid-text">
                    <div class="clearfix"></div>
                    
                <div class="text-center" style="margin-top:80px;" data-wow-duration="2000ms" data-wow-delay="00ms">
                    <img src="{{asset('img/new/picture.png')}}" class="img-responsive" style="display:inline">
                </div>
                <div class="text-center">
                    <h1 ><img src="{{asset('img/new/text.png')}}" class="img-responsive" style="display:inline"/></h1>
                    <!--<a href="#"  data-toggle="modal" data-target="#myModal"  class="btn btn-common btn-lg" style="color:#000">Register</a>-->
                    <a href="http://www.bit.ly/olotusq-dev-fellowship"  target="_blank"  class="btn btn-common btn-lg" style="color:#000">Register</a>
                </div>
                 
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin" style="color:#873333;"></i></div>
    </section>
    <!--/#home-slider-->

    <section >
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <a href="/space"><img src="{{asset('img/update/happylinks/icon_space.png')}}" alt="space availabe"></a>
                        </div>
                        <a href="/space"><h2>Space</h2></a>
                        <p>
                            A combination of desk, constant power, internet, relaxation/recreational facilities  <a href="/space">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <a href="/community"><img src="{{asset('img/update/happylinks/icon_community.png')}}" alt=""></a>
                        </div>
                        <a href="/community"><h2>Community</h2></a>
                        <p>
                            Learn faster, recruit faster, collabrorate better amongsts like minds from beginner to expert levels. <a href="/community">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                           <a href="/solutions"> <img src="{{asset('img/update/happylinks/icon_solutions.png')}}" alt=""></a>
                        </div>
                        <a href="/solutions"><h2>Solutions</h2></a>
                        <p>
                            Analysis, Design and Implementation of Computing Systems. Just think it and let us build it.<a href="/solutions">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    
    
    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">The Champion's Dream</h1>
                            <p>We are committed to raising champions &amp; guess what? We do it well.</p>
                        </div>
                        <!--<div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">-->
                        <!--    <div class="tour-button">-->
                        <!--        <a href="#contact" class="btn btn-common">JOIN THE PARTY</a>-->
                        <!--     </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    
        <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp /" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="{{asset('img/new/happy_client.png')}}" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Leaving a smile on a client's face is a duty we hold dear. </p><p>&nbsp;</p>
                    </div>
                    <div class="clients-logo wow fadeIn col-xs-12 col-sm-8 col-sm-offset-2" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-4 col-sm-3">
                            <a target="_blank" href="http://gifthub.ng"><img src="{{asset('img/update/happylinks/gifthub-logo.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a target="_blank" href="http://gerocare.org"><img src="{{asset('img/update/happylinks/gerocare-logo.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a target="_blank" href="http://sharenet.io"><img src="{{asset('img/update/happylinks/sharenet_logo.png')}}" class="img-responsive padding-let" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->


    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 ">
                    <div class="clients text-center padding-top wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">Featured In</h1>
                    </div>
                    <div class="clients-logo wow fadeIn padding-top" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-4 col-sm-2 col-sm-offset-2">
                            <a target="_blank" href="https://developers.google.com/programs/community/stories/olotu-square"><img src="{{asset('img/update/featured/google.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a target="_blank" href="http://gdgportharcourt.blogspot.com.ng/?view=magazine"><img src="{{asset('img/update/featured/gdg.svg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a target="_blank" href="http://www.notn.gov.ng/innovation_hubs"><img src="{{asset('img/update/featured/notn.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a target="_blank" href="https://techpoint.ng/2017/04/05/accelerating-nigerian-startup-disastrous/"><img src="{{asset('img/update/featured/techpoint.png')}}" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="display:none;">
                    <h2 class="text-center"><strong>Testimonials</strong></h2>
                <div class="col-sm-3 text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{asset('img/update/testimonials/testimonial.jpg')}}" alt="">
                        </div>
                        
                    </div>
                    <h2>Swift Page</h2>
                     <p>Venison tongue, salami corned beef ball tip meatloaf bacon.</p>
                </div>
                <div class="col-sm-3 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{asset('img/update/testimonials/testimonial.jpg')}}" alt="">
                        </div>
                       
                    </div>
                     <h2>Swift Page</h2>
                     <p>Venison tongue, salami corned beef ball tip meatloaf bacon.</p>
                </div>
                <div class="col-sm-3 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{asset('img/update/testimonials/testimonial.jpg')}}" alt="">
                        </div>
                        
                    </div>
                    <h2>Swift Page</h2>
                    <p>Venison tongue, salami corned beef ball tip meatloaf bacon.</p>
                </div>
                <div class="col-sm-3 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{asset('img/update/testimonials/testimonial.jpg')}}" alt="">
                        </div>
                        
                    </div>
                    <h2>Swift Page</h2>
                    <p>Venison tongue, salami corned beef ball tip meatloaf bacon.</p>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><i class="fa fa-envelope-o"></i> SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <p>Be the first to know.<br /> Stay updated.</p>
                        </div>
                        <div class="col-sm-6 newsletter">
                            <form id="newsletter">
                                <input class="form-control" type="email" name="email" id="news_email" value="" placeholder="Enter Your email">
                                <i id="news_indicator" class="fa fa-check"></i>
                            </form>
                            <p>Don't worry we will not use your email for spam</p>
                        </div>    
                    </div>
                </div>     
            </div>
        </div> 
    </section>
    
    <section id="contact">
        <div class="container">
            <div class="row ">
                
                <div class="col-md-3 col-sm-6 padding bottom" ="contact">
                    <h2>Olotu Square</h2>
                    <p ><a href="/space">Space</a></p>
                     <p ><a href="/community">Community</a></p>
                      <p ><a href="/solutions">Solutions</a></p>
                       <p ><a href="/the-square">The Square</a></p>
                       <p ><a href="/the-square">The Village</a></p>
                       
                </div>
                <div class="col-md-3 col-sm-6 padding" id="contact">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:hello@olotusquare.co">hello@olotusquare.co</a> <br> 
                        Phone: +234 (0) 805 998 6648 <br>
                        </address>

                        <h2>Address</h2>
                        <address>
                        1 Khana Street, <br> 
                        D/Line, <br> 
                        PortHarcourt <br> 
                        Rivers State, Nigeria <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 padding" id="contact">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <div class="alert alert-success" id="success_div" style="display:none;">
                            <a href="#" id="success_close" class="close" aria-label="close">&times;</a>
                            <strong><span id="success_message"></span></strong>
                        </div>
                        
                        <div class="alert alert-danger" id="error_div" style="display:none;">
                            <a href="#" class="close" id="error_close" aria-label="close">&times;</a>
                            <strong><span id="error_message"></span></strong>
                        </div>
                        <form id="main-contact-form" name="contact-form">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" id="sendmessage" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/section-->
    
    @include('layouts.front.footer')
@endsection
