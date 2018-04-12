@extends('layouts.front.master')

@section('content')

@section('title')
    The Square
@endsection



@section('content')

<section id="page-breadcrumb">
    <div class="vertical-center sunsquare">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-5">
                        <h1 class="title">THE SQUARE</h1>
                         <p>Equiping Champions for regional transformation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="section">
    <div class="container">
        <div class="row padding">
            <div class="action ">
                <div class="col-sm-4 col-sm-offset-1 text-center">
                    <div class="singl">
                        <img src="{{asset('img/update/the_square/our-vision.png')}}"></img>
                    </div>
                    <h1 class="title">Our Vision</h1>
                    <p>To be the largest network of Business and Techonlogy leaders</p>
                    <p></p>
                </div>
                <div class="col-sm-4 col-sm-offset-1 text-center">
                    <div class="singl">
                        <img src="{{asset('img/update/upload/traget.png')}}"></img>
                    </div>
                    <h1 class="title">Our Mission</h1>
                    <p>To create and support community leaders to build and sustain the economic viabilty of their region through Business and Techmology</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="services">
    <div class="contain">
        <div class="row  bdimg">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="col-sm-4  col-sm-offset-1  padding-top wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-servi">
                        <div class="wow scaleIn text-center" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{asset('img/update/the_square/target-09.png')}}" alt="">
                            <h2><strong>GCSQ</strong></h2>
                            <p class="myElement3">Graphics &amp; Creativity Square: we conceptualize, design, and implement branding portfolio while encouraging all-round creativity approach<br></p>
    
                        </div>
                      </div>
                </div>
                <div class="col-sm-4 col-sm-offset-2 padding-top wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-servi">
                        <div class="wow scaleIn text-center" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{asset('img/update/the_square/target-08.png')}}" alt="">
                            <h2><strong>HACKERS SQ</strong></h2>
                            <p class="myElement3">We know the word says hacking but we wear the white hats to secure website applications and server.<br></p>
    
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2 padding">
                <div class="col-sm-4 col-sm-offset-1 text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{asset('img/update/the_square/target-06.png')}}" alt="">
                        <h2><strong>DEV SQ</strong></h2>
                         <p class="myElement3">Developer Square: we build tech solutions to meet the everyday demand of our client to meet the everyday demands of our clients, and to support the startup and tech ecosystem of the country. <br></p>
    
                        </div>
                        </div>
                </div>
                
                <div class="col-sm-4 col-sm-offset-2 text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-servic">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{asset('img/update/the_square/target-07.png')}}" alt="" >
                            <h2><strong>STARTUP SQ</strong></h2>
                            <p class="myElement3">Startup Square: focuses on growing the Startup and Technology ecosystem of the nation. A community of Founders, Innovators, Investors and Thought Leaders willing to make a difference.<br></p>
    
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#services-->

<section id="portfolio" style="display:none">
        <div class="container">
            <div class="row padding-top">
                <h2 class="text-center"><strong>Team</strong></h2>        
                <div class="portfolio-items">
                    <div class="col-sm-2 col-sm-offset-1 portfolio-item branded logos wow fadeIn" data-wow-duration="1300ms" data-wow-delay="300ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/4.jpeg')}}" class="img-circle img-responsive" alt="" data-wow-duration="1000ms" data-wow-delay="300ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 portfolio-item branded folio wow fadeIn" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/3.jpeg')}}" class="img-circle img-responsive" alt="" data-wow-duration="1200ms" data-wow-delay="600ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="2000ms" data-wow-delay="900ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/1.jpg')}}" class="img-circle img-responsive" alt="" data-wow-duration="1500ms" data-wow-delay="900ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/5.jpg')}}" class="img-circle img-responsive" alt="" data-wow-duration="500ms" data-wow-delay="300ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="1600ms" data-wow-delay="600ms">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="{{asset('img/update/upload/4.jpeg')}}" class="img-circle img-responsive" alt="" data-wow-duration="1200ms" data-wow-delay="600ms">
                                    </div>
                                </div>
                                <div class="portfolio-info text-center ">
                                    <h2>Sailing Vivamus</h2>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
            <div class="row">
                <div class="portfolio-items ">
                    <div class="col-sm-2 col-sm-offset-2 portfolio-item branded logos wow fadeIn" data-wow-duration="2000ms" data-wow-delay="900ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/4.jpeg')}}" class="img-circle img-responsive" alt="" data-wow-duration="1500ms" data-wow-delay="900ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/3.jpeg')}}" class="img-circle img-responsive" alt="" data-wow-duration="500ms" data-wow-delay="300ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="2000ms" data-wow-delay="900ms">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/upload/1.jpg')}}" class="img-circle img-responsive" alt="" data-wow-duration="2000ms" data-wow-delay="900ms">
                                </div>
                            </div>
                            <div class="portfolio-info text-center ">
                                <h2>Sailing Vivamus</h2>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-2 portfolio-item design logos wow fadeIn" data-wow-duration="1500ms" data-wow-delay="800ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="{{asset('img/update/upload/5.jpg')}}" class="img-circle img-responsive" alt="" data-wow-duration="500ms" data-wow-delay="300ms">
                            </div>
                        </div>
                        <div class="portfolio-info text-center ">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 padding">
            
              <h2 class="text-center"><strong>Program and Activities</strong></h2>
              <div class="panel-group" id="accordion">
                <div class="panel panel-default colorsqc" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Olotu Square Fellowship</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body colorsqcrt">This programme happens once a year. Aspiring and dedicated tech enthusiasts with interest in learning to code/design are given an opportunity. Through this programme they go through a well structured curriculum that builds them from Beginners to Pros under OlotuSquare training and mentorship. <p>Interested participants can apply for the Developer, Design or Hacker Fellowship programmes on our website when available.</p> </div>
                  </div>
                </div>
                <div class="panel panel-default colorsqc" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                  <div class="panel-heading colorsqcrt">
                    <h4 class="panel-title">
                      <a href="#collapse2" >Internship</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body colorsqcrt">Tech enthusiasts and aspiring entrepreneurs are accepted to intern at OlotuSquare or join us as volunteers. This enables them receive first hand experiences required to start a career in business or technology. </div>
                  </div>
                </div>
                <div class="panel panel-default colorsqc"  data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Dev Expo</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body colorsqcrt">An event organised and hosted annually by OlotuSquare to guide, research, present, train or enable networking between developers.</div>
                  </div>
                </div>
                <div class="panel panel-default colorsqc" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i>[ Food ]</i> In Tech</a>
                    </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse colorsqcrt">
                    <div class="panel-body ">It's a food affair. This food festival is centered around the creating a networking event for tech users to meet tech builders while they hustle through different Nigeria local dishes. The event is always themed by the major meal of the day (e.g Bole, Peppersoup, Jollof Rice, etc.).</div>
                  </div>
                </div>
              </div> 
                
        </div>
    </div>
</section>
<!--/#services-->



@include('layouts.front.footer')
@endsection
