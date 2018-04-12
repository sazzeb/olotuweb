@extends ('layouts.front.master')

@section('title')
    Space
@endsection



@section('content')

<section id="page-breadcrumb">
    <div class="vertical-center sunspace">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Office Space
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
                <h2><strong>Space</strong></h2>
                <p>A combination of desk, constant power, internet, and relaxation/recreational facilities (yes! including a gaming corner). These and coffee, in the right proportioncan create the best working enviroment for you. It's OlotuSquare - the best atmosphere for start-ups or upcoming world-class developers.</p>
                
            </div>
        </div>
    </div>
</section>

 <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <img src="{{asset('img/new/extra.png')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>

<section class="container">        
        <div id="price-table">
            <div class="row">
                <h2 class="text-center"><strong>General Plans</strong> </h2>
                <div class="col-sm-6 col-md-4">
                    <div class="single-price price-one">
                        <div class="table-heading">
                            <p class="plan-name">One Day</p>
                            <p class="plan-price"><span class="dollar-sign">#</span><span class="price">2,000</span><span class="month">/ Day</span></p>
                        </div>
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                            <li>Conference room and Events <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage. <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-price">
                        <div class="table-heading">
                            <p class="plan-name">Five Days</p>
                            <p class="plan-price"><span class="dollar-sign">#</span><span class="price">8,000</span><span class="month">/ Five Days</span></p>
                        </div>
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming<span><i class="fa fa-check"></i></span></li>
                            <li>Conference room and Events <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage. <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-price">
                        <div class="table-heading">
                            <p class="plan-name">Twenty Days</p>
                            <p class="plan-price"><span class="dollar-sign">₦</span><span class="price">20,000</span><span class="month">/ 20 Days</span></p>
                        </div>
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming<span><i class="fa fa-check"></i></span></li>
                            <li>Conference room and Events <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage.<span><i class="fa fa-check"></i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/#price-table-->
    </section>
    
    <section class="container">        
        <div id="price-table">
            <div class="row">
                <h2 class="text-center"><strong>STANDARD - </strong>Semi-private Workspace </h2>
                
                <div class="col-sm-6 col-md-4">
                    <div class="single-price highligh-table">
                        <div class="table-heading">
                            <p class="plan-name">One Day</p>
                            <p class="plan-price"><span class="dollar-sign">₦</span><span class="price">3,000</span><span class="month">/ Day</span></p>
                        </div>                        
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services  <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                            <li>Conference room and Events <span class="checkerRm"><i class="fa fa-times"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage<span class="checkerRm"><i class="fa fa-times"></i></span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4">
                    <div class="single-price highligh-table">
                        <div class="table-heading">
                            <p class="plan-name">Five Days</p>
                            <p class="plan-price"><span class="dollar-sign">₦</span><span class="price">15,000</span><span class="month">/ 5 Days</span></p>
                        </div>                        
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services  <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming<span><i class="fa fa-check"></i></span></li>
                            <li>Conference room and Events <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage<span class="checkerRm"><i class="fa fa-times"></i></span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4">
                    <div class="single-price highligh-table">
                        <div class="table-heading">
                            <p class="plan-name">Twenty Days</p>
                            <p class="plan-price"><span class="dollar-sign">₦</span><span class="price">35,000</span><span class="month">/ 20 Days</span></p>
                        </div>                        
                        <ul>                            
                            <li>Power Supply. <span><i class="fa fa-check"></i></span></li>
                            <li>Available Working Space <span><i class="fa fa-check"></i></span></li>
                            <li>Internet Access <span><i class="fa fa-check"></i></span> </li>
                            <li>Business Support Services <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Relaxation Area Gaming<span><i class="fa fa-check"></i></span></li>
                            <li>Conference room and Events <span><i class="fa fa-check"></i></span></li>
                            <li>Access to Startup/Tech Community audience for your adverts, promos, business partnership/patronage <span><i class="fa fa-check"></i></span></li>
                        </ul>
                    </div>
                </div>
        </div><!--/#price-table-->
    </section>
    
    
    
    
    <section id="portfolio">
        <div class="container">
            <div class="row">
                
                <div class="portfolio-items">
                    <div class="col-sm-12 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info" >
                                <h2 class="text-center"><strong>Conference Room</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/conferenceroom_wide.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <!--<div class="portfolio-view" >-->
                                <!--    <ul class="nav nav-pills">-->
                                <!--        <li><a href="{{asset('img/update/space_images/conferenceroom_square1.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>-->
                                        
                                        
                                <!--    </ul>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="portfolio">
        <div class="container">
            <div class="row padding">
                
                <div class="portfolio-items">
                    <div class="col-sm-12 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center padding"><strong>Main Hall</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/mainhall_wide.JPG')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/space_images/mainhall_square1.JPG')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section id="portfolio">
        <div class="container">
            <div class="row">
                
                <div class="portfolio-items">
                    <h2 class="text-center"><strong>The Gallery</strong></h2>
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/hall1.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/hall3.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/space_images/hall3.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/hall4.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/hall2.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/kitchen2.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center"style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/relax.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/game1.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-items">
                    <div class="col-sm-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-info">
                                <h2 class="text-center" style="display:none;"><strong>The Square</strong></h2>
                            </div>
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('img/update/space_images/game3.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view" style="display:none;">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{asset('img/update/demo_images/dummy-03.png')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('layouts.front.footer')

@endsection

