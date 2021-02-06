<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COLORMAG - NEWS SITE</title>
<link href="{{ url('public/css/style.css') }}" rel="stylesheet"/>
<link href="{{ url('public/css/font-awesome.min.css') }}" rel="stylesheet"/>
<link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet"/>
<script src="{{ url('public/js/jquery.min.js') }}"></script>
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
</head>

<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
    		<span class="day">{{ date('l,M d,Y') }}</span> 
        </div>
        <div class="col-md-9">
        	<span class="latest">Latest: </span> <a href="#">Wireless Headphones are now on Market</a>
        </div>
    </div>
    <div class="col-md-3 top-social ">
        @foreach($setting->social as $key=>$social)       
        <a href="{{ $social }}" class="social-icon"><i class="fa fa-{{ $icons[$key] }}"></i></a>
        @endforeach
    </div>
</div>

<div class="col-md-12 brand">
	<div class="col-md-4 name">
        @if($setting->image)
    	<img src="{{ url('public/settings') }}/{{ $setting->image }}" width="100%" alt="newpaper logo"> 
        @endif
    </div>
    <div class="col-md-8">
    	<img src="{{url('public/images/final-news-site_06.gif')}}" width="100%" />
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		<span class="navbar-brand"><font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font></span>
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="{{ url('/') }}" class="active"><span class="glyphicon glyphicon-home"></span>
                    </a></li>
                    @foreach($categories as $cat)
    				<li><a href="{{ url('category') }}/{{ $cat->slug }}" 
                    class="text-uppercase">{{ $cat->title }}</a></li>
                    @endforeach
        		</ul> 
			</div>
		</nav>
	</div>
	<div class="col-md-2">
        <div class="search">
            <input type="search" class="form-control" />
            <span class="glyphicon glyphicon-search search-btn"></span>    
        </div>
    </div>
</div>

<!-- header -->
@yield('content')

<!-- footer -->
<div class="col-md-12 bottom">
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
                @if($setting->image)
                <img src="{{ url('public/settings') }}/{{ $setting->image }}" width="100%" alt="newpaper logo"> 
                @endif
            <p align="justify">{{ $setting->about }}</p>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
            </div>    
            <div class="col-md-6">
                <div class="row">
                <ul class="nav">
                    @foreach($categories as $key=>$cat)
                    @if($key < 4)
                    <li><a href="{{ url('category') }}/{{ $cat->slug }}" class="text-uppercase">{{ $cat->title }}</a></li>
                    @endif
                    @endforeach
                </ul> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                <ul class="nav">
                    @foreach($categories as $key=>$cat)
                    @if($key > 3)
                    <li><a href="{{ url('category') }}/{{ $cat->slug }}" class="text-uppercase">{{ $cat->title }}</a></li>
                    @endif
                    @endforeach
                </ul> 
                </div>
            </div>    
        </div>
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
                @if($setting->image)
                <img src="{{ url('public/settings') }}/{{ $setting->image }}" width="100%" alt="newpaper logo"> 
                @endif
                <p>Follow us at:</p>
                @foreach($setting->social as $key=>$social)       
                    <a href="{{ $social }}" class="social-icon"><i class="fa fa-{{ $icons[$key] }}"></i></a>
                @endforeach
                <a href="#top" class="goto"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
</div>

<div class="col-md-12 text-center copyright">
    Copyright &copy; {{date('Y')}} <a href="#">COLORMAG</a> Powered by: <a href="#">BOSPOS</a>
</div>
<script>
    // effect scroll top           
    $(document).ready(function() {
        var duration = 500;
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('.goto').fadeIn(duration);
            } else {
                $('.goto').fadeOut(duration);
            }
        });

        $('.goto').click(function(event) {
            event.preventDefault();
            $('html').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>   
</body>
</html>