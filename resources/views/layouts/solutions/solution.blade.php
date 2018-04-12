@extends ('layouts.front.master')

@section('title')
    Solutions
@endsection



@section('content')

<section id="page-breadcrumb">
    <div class="vertical-center sunsolution">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <!--<h1 class="title">The Square Solution</h1>-->
                        <!--<p>Designed to suit you.</p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="company-information" class="choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 padding-top wow fadeInDown text-center"  data-wow-duration="1000ms" data-wow-delay="0ms">
                <h2><strong>Solutions</strong></h2>
                <p> What do you get when you combine Smart Problem Solvers, a Fluid Work Space, an agile Community of Tech Experts and Enthusiasts? Yes...Solutions! <br> Effective solutions to real problems. Ready to change the future?</p>
                
            </div>
        </div>
    </div>
</section>
<!--/#company-information-->


<section id="features">
        <div class="container">
            <div class="row" style="display:none">
                <div class="single-features">
                    <div class="col-ms-2"></div>
                    <div class="col-sm-4  wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{asset('img/update/communities/hacker.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-sm-offset-2 wow fadeInRight algn-right" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>Web Development</strong></h2>
                        <p>Software Development</p>
                        <p>Mobile App Development</p>
                        <p>Software Optimization</p>
                        <p>Application Investigation</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-4 col-sm-offset-2 align-left wow fadeILeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong> Creative Designs and Arts</strong></h2>
                        <p>Graphic Design</p>
                        <p>Branding</p>
                        <p>UI/UX Design</p>
                        <p>Illustrations</p>
                    </div>
                    <div class="col-sm-5 wow fadeInRight " data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{asset('img/update/communities/hacker.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-ms-2"></div>
                    <div class="col-sm-4 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{asset('img/update/communities/hacker.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-2 col-sm-offset-2 wow fadeInRight alig-right" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>Startup Development</strong></h2>
                        <p>Startup Advisory</p>
                        <p>Startup Mentorship</p>
                        <p>Networking Support</p>
                        <p>Business development</p>
                        <p>Social Media Management</p>
                    </div>
                </div>
                
                <div class="single-features">
                    <div class="col-sm-4 col-sm-offset-2 align-left wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><strong>Ethical hacking</strong></h2>
                        <p>Penetration Testing</p>
                        <p>Vulnerability Testing</p>
                        <p>Application Security</p>
                        <p>Investigation</p>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="900ms" data-wow-delay="600ms">
                        <img src="{{asset('img/update/communities/hacker.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->
     
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-6  padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-servicesol">
                    <div class="wow scaleIn text-center" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{asset('img/update/solutions/flat_social_media_icons-02.png')}}" class="img-responsive" alt="">
                        <h2><strong>Web Development</strong></h2>
                        <p>Software Development</p>
                        <p>Mobile App Development</p>
                        <p>Software Optimization</p>
                        <p>System Analysis and Design</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-servicesol">
                    <div class="wow scaleIn text-center" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="{{asset('img/update/solutions/flat_social_media_icons-03.png')}}" class="img-responsive" alt="">
                        <h2><strong> Creative Designs and Arts</strong></h2>
                        <p>Graphic Design</p>
                        <p>Branding</p>
                        <p>UI/UX Design</p>
                        <p>Illustrations</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-servicesol">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="{{asset('img/update/solutions/flat_social_media_icons-04.png')}}" class="img-responsive" alt="">
                    <h2><strong>Startup Development</strong></h2>
                        <p>Startup Advisory</p>
                        <p>Startup Mentorship</p>
                        <p>Networking Support</p>
                        <p>Business Incubation</p>
                        
                    </div>
                    </div>
            </div>
            <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-servicesol">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="{{asset('img/update/solutions/flat_social_media_icons-05.png')}}" class="img-responsive" alt="" >
                        <h2><strong>Ethical Hacking</strong></h2>
                        <p>Penetration Testing</p>
                        <p>Vulnerability Testing</p>
                        <p>Application/System Security</p>
                        <p>Forensic Investigations</p>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>
<!--/#services-->



    
    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <a href="#" class="btn btn-common uppercase">PortFolio</a>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="timeline-divider overflow">
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="{{asset('img/update/solutions/gerocare.png')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><a href="{{asset('img/update/solutions/gerocare1.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div style="display:none">
                                                <li><a href="{{asset('img/update/solutions/gerocare2.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </div>
                                        </div>         
                                    
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a href="{{asset('img/update/solutions/gerocare1.png')}}" data-lightbox="example-set">GEROCARE</a></h2>
                                        <h3>User Research &#x25AA Development</h3>
                                        <p class="myElement2">Gerocare provides affordable and easily accessible regular physician home visits to the elderly to prevent deterioration in their health condition, maintain a healthy state and improve quality of life. Olotu Square was tasked with undertaking User Research and Software Development of the platform. We gave great detail to every inch of execution and delivery,<br></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="{{asset('img/update/solutions/brand.png')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><a href="{{asset('img/update/solutions/brand1.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div style="display:none">
                                                <li><a href="{{asset('img/update/solutions/brand2.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/brand3.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/brand4.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/brand5.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/brand6.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/brand7.png')}}" data-lightbox="example-set1"><i class="fa fa-eye"></i></a></li>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="post-content overflow">
                                        <h2 class="post-title bold"><a  href="{{asset('img/update/solutions/brand1.png')}}" data-lightbox="example-set1">FOURWINDS</a></h2>
                                        <h3>Branding &#x25AA Design,</h3>
                                        <p class="myElement2">Fourwinds is a business and investment company that nurture business incubation by providing business networking activities, marketing assistance and soft skill training. Fourwinds also offers financial assistance in areas of Investment planning, Banking Relationship and Budgeting . We created the concept and designed the branding identity for Fourwinds.<br></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-divider overflow padding-bottom">
                            <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="{{asset('img/update/solutions/unit.png')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><a href="{{asset('img/update/solutions/unit1.png')}}" data-lightbox="example-set2"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div style="display:none">
                                                <li><a href="{{asset('img/update/solutions/unit2.png')}}" data-lightbox="example-set2"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/unit3.png')}}" data-lightbox="example-set2"><i class="fa fa-eye"></i></a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2><a href="{{asset('img/update/solutions/unit1.png')}}" data-lightbox="example-set2">UNICREDIT BRANDING</a></h2>
                                        <h3>Branding &#x25AA Design</h3>
                                        
                                        <p class="myElement2">Unicredit is a direct pair to pair loan management system with an easy access to users to get loan or return on investment as they lend money to others. We sealed the brand design. <br></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="single-blog timeline">
                                    <div class="single-blog-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="{{asset('img/update/solutions/unicredit.png')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><a href="{{asset('img/update/solutions/unicredit1.png')}}" data-lightbox="example-set3"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div style="display:none">
                                                <li><a href="{{asset('img/update/solutions/unicredit2.png')}}" data-lightbox="example-set3"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="{{asset('img/update/solutions/unicredit3.gif')}}" data-lightbox="example-set3"><i class="fa fa-eye"></i></a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-content overflow">
                                        <h2><a href="{{asset('img/update/solutions/unicredit1.png')}}" data-lightbox="example-set3">UNICREDIT APP</a></h2>
                                        <h3> App &#x25AA Development </h3>
                                        <p class="myElement2">Unicredit is a direct pair to pair loan management system with an easy access to users to get loan or return on investment as they lend money to others. Its system was built by our efficient and credible team of Software Developers, and was tested by our core Software Engineering team.<br></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
    


    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <h2 class="text-center"><strong>Best Solution Tools</strong></h2>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_02.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_12.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_20.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_22.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_04.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_06.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_10.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 portfolio-item branded mobile">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="img/update/resource/dev-tools_08.png" class="img-responsive" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->
    
    
    
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-top">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="{{asset('img/new/happy_client.png')}}" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Leaving a smile on a client's face is a duty we hold dear. <br> It is what drives us </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-6 col-sm-offset-2 col-sm-3">
                            <a target="_blank" href="http://gifthub.ng"><img src="{{asset('img/update/happylinks/gifthub-logo.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a target="_blank" href="http://gerocare.org"><img src="{{asset('img/update/happylinks/gerocare-logo.png')}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a target="_blank" href="http://sharenet.io"><img src="{{asset('img/update/happylinks/sharenet_logo.png')}}" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->



@include('layouts.front.footer')

@endsection

