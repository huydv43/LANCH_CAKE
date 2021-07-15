
<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="/admins/css/bootstrap.min.css" >
<link href="/admins/css/custom.css" rel='stylesheet' type='text/css' />
<link href="/admins/css/style.css" rel='stylesheet' type='text/css' />
<link href="/admins/css/style-responsive.css" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/admins/css/font.css" type="text/css"/>
<link href="/admins/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="/admins/css/morris.css" type="text/css"/>
<link rel="stylesheet" href="/admins/css/monthly.css">
<script src="/admins/js/jquery2.0.3.min.js"></script>
<script src="/admins/js/raphael-min.js"></script>
<script src="/admins/js/morris.js"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="">
                <span class="username">
                    <?php
                        $user = Auth::guard('admin')->user();
                        echo $user->name;
                    ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>       
    </ul>
</div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Bánh</span>
                    </a>
                    <ul class="sub">
						<li><a href="">Thêm Bánh</a></li>
						<li><a href="">Liệt kê tất cả bánh</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Loại Bánh</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('category-cake.create')}}">Thêm Loại Bánh</a></li>
						<li><a href="{{route('category-cake.index')}}">Liệt kê tất cả loại bánh</a></li>
                    </ul>
                </li>

				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Slider</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('slider.create')}}">Thêm Sliders</a></li>
                    </ul>
                    <ul class="sub">
						<li><a href="{{route('slider.index')}}">Tất cả Slider</a></li>
                    </ul>
                    
                </li>
                
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
    </div>
</aside>
<section id="main-content">
	<section class="wrapper">
		@yield('admin_content')
	</section>
</section>
</section>
<script src="/admins/js/bootstrap.js"></script>
<script src="/admins/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/admins/js/scripts.js"></script>
<script src="/admins/js/script.js"></script>
<script src="/admins/js/jquery.slimscroll.js"></script>
<script src="/admins/js/jquery.nicescroll.js"></script>
<script src="/admins/js/jquery.scrollTo.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	<script type="text/javascript" src="/admins/js/monthly.js"></script>
</body>
</html>
