@extends ('layouts.front.master');


@section('title')
    Community
@endsection



@section('content')

<section id="page-breadcrumb">
    <div class="vertical-center suncommunitities">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section id="company-information" class="choose" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="{{asset('img/update/demo_images/dummy-03.png')}}" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <h2><strong>Affiliated Communities</strong></h2>
                <p style="font-size: 1.5em; color:gray;">Unlimited access to experienced, world-class developers. Get tutored by the best. Equip yourself, network and collaborate with the smartest minds in the community. Join Tech Circles and stay abreast of latest technology trends in your field.</p>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-md-offset-2">
                <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="single-blog single-column">
                            <div class="post-content overflow text-center">
                                <img src="{{asset('img/update/communities/osicon.png')}}"></img>
                                <h2 class="post-title bold "><a href="blogdetails.html">Olotu Square Community</a></h2>
                                <p>We believe in collaboration as the way forward to make a difference. With this in mind we have put together an ecosystem that supports and nurtures the spirit of collaboration among itself. Our community is made up of enthusiasts and world renowed leaders alike. We aim to create a balance where aspirers can learn and grow as  much as they need to grow by getting help from these leaders as mentors, investors, and coaches. </p>
                                <a href="/#" data-toggle="modal" data-target="#myModal" class="btn btn-lg btn-default center">Join Us</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--/#blog-->
    
    



<section >
        <div class="container">
            <div class="row">
                <h2 class="text-center"><strong>Communities We Love</strong></h2>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-servic">
                        <div class="wow scaleIn " data-wow-duration="500ms" data-wow-delay="300ms">
                            <a href="https://forloop.africa/members"><img src="{{asset('img/update/communities/com/forloop.png')}}" alt="space availabe"></a>
                        </div>
                        <a href="https://forloop.africa/members"><h2>ForLoop</h2></a>
                         <p><a class="btn btn-sm btn-default" href="https://forloop.africa/members">Join ForLoop</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-servce">
                        <div class="wow scaleIn " data-wow-duration="500ms" data-wow-delay="600ms">
                            <a href="https://developers.google.com/programs/community/gdg/"><img src="{{asset('img/update/communities/com/gdg.png')}}" alt=""></a>
                        </div>
                        <a href="https://developers.google.com/programs/community/gdg/"><h2>GDG Nigeria</h2>
                         <p><a class="btn btn-sm btn-default" href="https://developers.google.com/programs/community/gdg/"  href="https://developers.google.com/programs/community/gdg/">Join GDG</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-servic">
                        <div class="wow scaleIn r" data-wow-duration="500ms" data-wow-delay="900ms">
                           <a href="https://docs.google.com/forms/d/1XaMl7v4RGC3T93Bs4llxZdpV7qUGHj6Nj82LRQqleuo/viewform?edit_requested=true"> <img src="{{asset('img/update/communities/com/ingressive.png')}}" alt=""></a>
                        </div>
                        <a href="https://docs.google.com/forms/d/1XaMl7v4RGC3T93Bs4llxZdpV7qUGHj6Nj82LRQqleuo/viewform?edit_requested=true"><h2>Ingressive</h2></a>
                        
                         <p><a class="btn btn-sm btn-default" href="https://docs.google.com/forms/d/1XaMl7v4RGC3T93Bs4llxZdpV7qUGHj6Nj82LRQqleuo/viewform?edit_requested=true">Join Ingressive</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-sevice">
                        <div class="wow scaleIn resizeigcom" data-wow-duration="500ms" data-wow-delay="900ms">
                           <a href="http://www.mediaworks.co.nz/home.html"> <img src="{{asset('img/update/mediaWorks.jpg')}}" alt=""></a>
                        </div>
                        <a href="http://www.mediaworks.co.nz/home.html"><h2>Mediaworks</h2></a>
                         <p><a class="btn btn-sm btn-default" href="http://www.mediaworks.co.nz/home.html">Join Mediaworks</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-servce">
                        <div class="wow scaleIn resizeimgc" data-wow-duration="500ms" data-wow-delay="300ms">
                            <a href="#"><img src="{{asset('img/update/communities/com/startup.png')}}" alt="space availabe"></a>
                        </div>
                        <a href="#"><h2>Startup Port Harcourt</h2></a>
                         <p><a class="btn btn-sm btn-default">Join Startup PH</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-srvice">
                        <div class="wow scaleIn resizeimom" data-wow-duration="500ms" data-wow-delay="600ms">
                            <a href="https://startupsouth.org"><img src="{{asset('img/update/startupsouth.jpg')}}" alt=""></a>
                        </div>
                        <a href="https://startupsouth.org"><h2>Startup South</h2>
                         <p><a class="btn btn-sm btn-default" href="https://startupsouth.org">Join Startup South</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-servce">
                        <div class="wow scaleIn resizeimcom" data-wow-duration="500ms" data-wow-delay="900ms">
                           <a href="https://www.f6s.com/vplatformhub/apply"> <img src="{{asset('img/update/communities/com/venturesplatform.png')}}" alt=""></a>
                        </div>
                        <a href="https://www.f6s.com/vplatformhub/apply"><h2>Ventures Platform</h2></a>
                         <p><a class="btn btn-sm btn-default" href="https://www.f6s.com/vplatformhub/apply">Join Ventures Platfrom</a></p>
                    </div>
                </div>
                <div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-servie">
                        <div class="wow scaleIn resizeimom" data-wow-duration="500ms" data-wow-delay="900ms">
                           <a href="https://www.xamarin.com/account/register?returnUrl=http%3A%2F%2Fwww.xamarin.com%2F"> <img src="{{asset('img/update/communities/com/xamarin.png')}}" alt=""></a>
                        </div>
                        <a href="https://www.xamarin.com/account/register?returnUrl=http%3A%2F%2Fwww.xamarin.com%2F"><h2>Xamarin</h2></a>
                         <p><a class="btn btn-sm btn-default" href="https://www.xamarin.com/account/register?returnUrl=http%3A%2F%2Fwww.xamarin.com%2F">Join Xamarin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

@include('layouts.front.footer')

@endsection