<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from laravel.spruko.com/dashfox/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 08:38:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>


        <!-- Title -->
		<title> AdminPanel </title>
        @stack('css')
        <!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/adminassets/img/brand/favicon.png') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('assetsadminassets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

		<!-- Icons css -->
		<link href="{{ asset('assetsadminassets/plugins/icons/icons.css') }}" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="{{ asset('assetsadminassets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="{{ asset('assets/adminassets/css/sidemenu.css') }}">

		<!--- Dashboard-2 css-->
		<link href="{{ asset('assets/adminassets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/css/style-dark.css') }}" rel="stylesheet">

		<!--- Color css-->
		<link id="theme" href="{{ asset('assets/adminassets/css/colors/color.css') }}" rel="stylesheet">

		
		<!--  Owl-carousel css-->
		<link href="{{ asset('assetsadminassets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

		<!-- Maps css -->
		<link href="{{ asset('assetsadminassets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

		<!-- Jvectormap css -->
        <link href="{{ asset('assetsadminassets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />


		<!---Skinmodes css-->
		<link href="{{ asset('assets/adminassets/css/skin-modes.css') }}" rel="stylesheet" />

		<!--- Animations css-->
		<link href="{{ asset('assets/adminassets/css/animate.css') }}" rel="stylesheet">

		<!---Switcher css-->
		<link href="{{ asset('assets/adminassets/switcher/css/switcher.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/switcher/demo.css') }}" rel="stylesheet">

		<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>


    </head>

    <body class="main-body light-theme">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/adminassets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- main-signin-wrapper -->

        <div class="my-auto page page-h">

            		
		
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper error-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{ asset('assets/adminassets/img/brand/logo-white.png') }}" class=" m-0 mb-4" alt="logo">
							<h5 class="mb-4">AdminPanel Authorization</h5>
							<p class="mb-5">არასაქნქცირებული შეღწევა ისჯება საქართველოს სისხლის სამართლის კოდექსით, უსაფთხოების მიზნით მიმდინარეობს აღნიშნულ გვერდზე შემოსული მომხმარებლის IP მისამართების მონიტორინგი და ჩაწერა.
                            </p>
						</div>
					</div>
				</div>
				<div class="p-5 wd-md-50p">
					<div class="main-signin-header">
						<h2>მოგესალმებით!</h2>
						<h4>გაიარეთ ავტორიზაცია</h4>
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
							<div class="form-group">
								<label>ელ-ფოსტა</label><input class="form-control" placeholder="Enter your email" type="text" name="email" value="">
							</div>
							<div class="form-group">
								<label>პაროლი</label> <input class="form-control" placeholder="Enter your password" type="password" name="password" value="">
							</div><button class="btn btn-main-primary btn-block">ავტორიზაცია</button>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->


        </div>

		<!-- /main-signin-wrapper -->

        <!-- JQuery min js -->
<script src="{{ asset('assets/adminassets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap4 js-->
<script src="{{ asset('assets/adminassets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Ionicons js -->
<script src="{{ asset('assets/adminassets/plugins/ionicons/ionicons.js') }}"></script>

<!-- Moment js -->
<script src="{{ asset('assets/adminassets/plugins/moment/moment.js') }}"></script>

<!-- eva-icons js -->
<script src="{{ asset('assets/adminassets/plugins/eva-icons/eva-icons.min.js') }}"></script>
  
<!-- Rating js-->
<script src="{{ asset('assets/adminassets/plugins/rating/jquery.rating-stars.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/rating/jquery.barrating.js') }}"></script>

 
 

<!-- custom js -->
<script src="{{ asset('assets/adminassets/js/custom.js') }}"></script>
        
	</body>

<!-- Mirrored from laravel.spruko.com/dashfox/ltr/signin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 May 2021 08:40:51 GMT -->
</html>