<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Olotusquare | @yield('title')</title>
    
    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        
    <link href="{{asset('default_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('default_assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('default_assets/css/animate.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('default_assets/css/lightbox.css')}}" rel="stylesheet"> 
    <link href="{{asset('vendor/toastr/build/toastr.min.css')}}" rel="stylesheet"> 
	<link href="{{asset('default_assets/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('default_assets/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/olotu.css')}}" rel="stylesheet">
    
         
    <link rel="shortcut icon" href="{{asset('default_assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('default_assets/images/ico/apple-touch-icon-1.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('default_assets/images/ico/apple-touch-icon-2.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('default_assets/images/ico/apple-touch-icon-3.png')}}">
</head>

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://www.facebook.com/olotusquare/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/olotusquare" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/10992204/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                    	<h1><img src="{{asset('default_assets/images/olotu/website_logo.png')}}" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ url()->current()==url('/')?'active':'' }}"><a href="/">Home</a></li>                
                        <li class="{{ url()->current()==url('/space')?'active':'' }}"><a href="/space" class="page-scroll">Space</a></li>                  
                        <li class="{{ url()->current()==url('/community')?'active':'' }}"><a href="/community" class="page-scroll">Community</a></li>                  
                        <li class="{{ url()->current()==url('/solutions')?'active':'' }}"><a href="/solutions" class="page-scroll">Solutions</a></li>                  
                        <li class="{{ url()->current()==url('/the-square')?'active':'' }}"><a href="/the-square" class="page-scroll">The Square</a></li>
                        <li><a href="http://village.olotusquare.co" target="_blank" class="page-scroll">The Village</a></li> 
                        
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
    
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Join our community</b></h4>
            </div>
            <div class="modal-body">
                <form id="main-contact-form" action="{{route('community.join')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email Address">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="form-control" required="required" placeholder="Phone Number">
                    </div>
                    
                    <div class="form-group">
                        <label for="interest">Interest</label>
                        <select name="interest" id="interest" class="form-control" required>
                            <option value="1">Business</option>
                            <option value="2">Technology</option>
                        </select>
                    </div>                        
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Join">
                    </div>
                </form>
            </div>
            <!--<div class="modal-footer">-->
            <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            <!--    <button type="button" class="btn btn-primary" data-dismiss="modal">Join</button>-->
            <!--</div>-->
        </div>
    
      </div>
    </div>
    
    <script type="text/javascript" src="{{asset('default_assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('default_assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('default_assets/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('default_assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/toastr/build/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('default_assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('default_assets/js/jquery.collapser.js')}}"></script>
       
    <script src="{{asset('js/olotu.js')}}"></script>
    <script>
        var urlNewsLetterSubscription = '{!! route('newsletter.subscribe') !!}';
        var urlSupportMail = '{!! route('support.contact') !!}';
        var token = '{{Session::token()}}';
    </script> 
    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"49cd7aee323417fefc919d49d","lid":"63aab8e2f1"}) })</script>
       
    
    @yield('page-js')


    @if(Session::has('success'))
        <script>
            setTimeout(function()
            {
                var opts = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-right",
                    "toastClass": "black",
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.success('{{Session::get('success')}}', "Success", opts);
            }, 1000);
        </script>
    @endif

    @if(Session::has('failure'))
        <script>
            setTimeout(function()
            {
                var opts = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-right",
                    "toastClass": "black",
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr.error('{{Session::get('failure')}}', "Error", opts);
            }, 3000);
        </script>
    @endif
    <script>
        $('.myElement').collapser({
            mode: 'words',
            truncate: 12
        });
        
        $('.myElement1').collapser({
            mode: 'words',
            truncate: 13
        });
        
        $('.myElement2').collapser({
            mode: 'words',
            truncate: 20
        });
        $('.myElement3').collapser({
            mode: 'words',
            truncate: 21
        });
    </script>
</body>
</html>
