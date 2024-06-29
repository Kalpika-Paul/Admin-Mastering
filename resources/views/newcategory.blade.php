<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('admin-assets/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin-assets/css/custom.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>					
				</ul>
				<div class="navbar-nav pl-2">
					<ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item"><a href="">Add Category</a></li>
						<li class="breadcrumb-item active">List</li>
					</ol>
				</div>
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
							<img src="{{asset('admin-assets/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
							<h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
							<div class="mb-3">example@example.com</div>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-user-cog mr-2"></i> Settings								
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-lock mr-2"></i> Change Password
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout							
							</a>							
						</div>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
            @include('layouts.sidebar')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Category</h1>
							</div>
							
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container">
                     
                        <p>Please Fillup The form </p> 
                        
                        
                        <form method = "post" action = "{{route('account.store')}}" >
                            @csrf
							@method('post')
							<div class="form-group">
                            <label for="name">Showroom Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Showroom Name" name="name" >
                           
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <div class="form-group">
                            <label for="address">Showroom Address </label>
                            <input type="text" class="form-control" id="address" placeholder="Enter Showroom address" name="address" >
                            
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" >
                           
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
                           
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" class="form-control" id="area" placeholder="Enter area" name="area" >
                            
                            <div class="invalid-feedback">Please fill out this field.</div>
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                      
                      {{-- <script>

                      (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                         
                          var forms = document.getElementsByClassName('needs-validation');
                          
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                      </script>
                       --}}
					
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->



			<footer class="main-footer">
				
				<strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('admin-assets/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('admin-assets/js/demo.js')}}"></script>
	</body>
</html>