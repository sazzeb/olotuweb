@extends('layouts.front.master')

@section('content')


<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Office Space</h1>
                        <p>Designed to suit you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section id="company-information" class="choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="{{asset('img/update/demo_images/dummy-03.png')}}" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <h2><strong>Space Available</strong></h2>
                <p>A combination of internet, constant power, recreational facilities (yes! and including a gaming centre) and coffee, in the right proportions brings out the monster in software developers. It's the OlotuSquare - the best atmosphere for upcoming and world-class developers.</p>
                <!--<ul class="elements">-->
                <!--    <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i> Accessible Internet Access</li>-->
                <!--    <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i> Free Access to Kitchen and Accessories</li>-->
                <!--    <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><i class="fa fa-angle-right"></i> Available Gaming Session</li>-->
                <!--    <li class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms"><i class="fa fa-angle-right"></i> Access To Startup </li>-->
                <!--    <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i> Power Supply.</li>-->
                <!--</ul>-->
            </div>
        </div>
    </div>
</section>
<!--/#company-information-->

@include('layouts.front.footer')
@endsection
