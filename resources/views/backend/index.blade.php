<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/menu.css')}}">
  <link href="{{ url('public/adminstyle.css') }}" rel="stylesheet"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/adminstyle.css"> -->	
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="index.html" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="view-table.html"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="add-post.html"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="category.html"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Gallery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Images</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Images</a></li>
              <li><a href="#"><i class="fa fa-eye"></i>All Videos</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Videos</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="menu.html">
              <i class="fa fa-file"></i> <span>Menu</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>            
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-bar-chart"></i> <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Reports</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Reports</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>Active User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
              <li><a href="login.html"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>		
	</ul>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Welcome to Dashboard</h2>
				<p class="welcome-text">We,ve assembled some links for you to get started.</p>
				<div class="row">
					<div class="col-sm-4">
						<h4>Get Started</h4><br>
						<button type="button" class="btn btn-lg btn-primary">Documentation</button>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>View Records</h4>
						<p><a href="#"><i class="fa fa-bookmark-o"></i> View All Posts</a></p>
						<p><a href="#"><i class="fa fa-image"></i> View All Images</a></p>
						<p><a href="#"><i class="fa fa-video-camera"></i> View All Videos</a></p>
						<p><a href="#"><i class="fa fa-file"></i> View All Pages</a></p>
						<p><a href="#"><i class="fa fa-bar-chart"></i> View All Reports</a></p>
						<p><a href="#"><i class="fa fa-users"></i> View All Users</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Add Records</h4>
						<p><a href="#"><i class="fa fa-bookmark-o"></i> Add Posts</a></p>
						<p><a href="#"><i class="fa fa-image"></i> Add Images</a></p>
						<p><a href="#"><i class="fa fa-video-camera"></i> Add Videos</a></p>
						<p><a href="#"><i class="fa fa-file"></i> Add Pages</a></p>
						<p><a href="#"><i class="fa fa-bar-chart"></i> Add Reports</a></p>
						<p><a href="#"><i class="fa fa-users"></i> Add Users</a></p>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="col-sm-3">			
					<img src="{{url('public/images/logo-big.png')}}" width="100%">
				</div>
				<div class="col-sm-9">
					<p><b><a href="http://www.webtrickshome.com" target="_blank">Webtrickshome.com</a></b> The ultimate home for prospective web developers.</p>
					<div class="row">
						<ul class="nav navbar-nav">
							<li><a href="#">photoshop</a></li>
							<li><a href="#">html</a></li>
							<li><a href="#">css</a></li>
							<li><a href="#">jquery</a></li>
							<li><a href="#">php basics</a></li>
							<li><a href="#">procedural php</a></li>
							<li><a href="#">object oriented php</a></li>
							<li><a href="#">laravel</a></li>
							<li><a href="#">wordpress</a></li>
						</ul>
					</div>	
					<p>
						<a href="https://www.facebook.com/webtrickshome/" target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/channel/UCcfzunR364Vv1NUWTKk78QA" target="_blank" class="btn btn-danger"><i class="fa fa-youtube"></i></a>
					 </p>
				</div>
			</div>
		</div>
	</div>
</div>


<footer>
	<div class="col-sm-6">
		Copyright &copy; 2018 <a href="http://www.webtrickshome.com">Webtrickshome.com</a> All rights reserved. 
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 2.2.3</span>
	</div>
</footer>

<script type="text/javascript" src="url('public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="url('public/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="url('public/js/app.min.js')}}"></script>
<script type="text/javascript" src="url('public/js/script.js')}}"></script>
</body>
</html>