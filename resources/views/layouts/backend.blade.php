<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Twitter -->
	<meta name="twitter:site" content="@themepixels">
	<meta name="twitter:creator" content="@themepixels">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Starlight">
	<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">
	<!-- Facebook -->
	<meta property="og:url" content="http://themepixels.me/starlight">
	<meta property="og:title" content="Starlight">
	<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
	<meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">
	<!-- Meta -->
	<meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="author" content="ThemePixels">
	<title>Starlight Responsive Bootstrap 4 Admin Template</title>
	<!-- vendor css -->
	
	<link href="{{asset('backend/lib')}}//font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="{{asset('backend/lib')}}//Ionicons/css/ionicons.css" rel="stylesheet">
	<link href="{{asset('backend/lib')}}//perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="{{asset('backend/lib')}}//rickshaw/rickshaw.min.css" rel="stylesheet">
	<!-- Starlight CSS -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/maicons.css">
	<link rel="stylesheet" href="{{asset('backend/css')}}//starlight.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
	
	<link href="{{asset('backend')}}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/summernote/summernote-bs4.css" rel="stylesheet">
	<link href="{{asset('css/bootstrap-tagsinput.css')}}" rel="stylesheet">
	
	@yield('styles')
</head>
<body>
	<!-- ########## START: LEFT PANEL ########## -->
	<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> {{settings()->short_name}}</a></div>
 @include("partials.backend.sidebar")
	<!-- sl-sideleft -->
	<!-- ########## END: LEFT PANEL ########## -->
  @include("partials.backend.topbar")
	<!-- sl-header -->
	<!-- ########## END: HEAD PANEL ########## -->
	<!-- ########## START: RIGHT PANEL ########## -->
	<div class="sl-sideright">
		<ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
			<li class="nav-item"> <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a> </li>
		</ul>
		<!-- sidebar-tabs -->
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
				<div class="media-list">
					<!-- loop starts here -->
					<a href="" class="media-list-link">
						<div class="media"> <img src="{{asset('backend/img')}}//img3.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p> <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
								<p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
							</div>
						</div>
						<!-- media -->
					</a>
					<!-- loop ends here -->
					<a href="" class="media-list-link">
						<div class="media"> <img src="{{asset('backend/img')}}//img4.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p> <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
								<p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
							</div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link">
						<div class="media"> <img src="{{asset('backend/img')}}//img7.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p> <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
								<p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
							</div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link">
						<div class="media"> <img src="{{asset('backend/img')}}//img5.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p> <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>
								<p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
							</div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link">
						<div class="media"> <img src="{{asset('backend/img')}}//img3.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p> <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
								<p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
							</div>
						</div>
						<!-- media -->
					</a>
				</div>
				<!-- media-list -->
				<div class="pd-15"> <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a> </div>
			</div>
			<!-- #messages -->
			<div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
				<div class="media-list">
					<!-- loop starts here -->
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img8.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p> <span class="tx-12">October 03, 2017 8:45am</span> </div>
						</div>
						<!-- media -->
					</a>
					<!-- loop ends here -->
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img9.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p> <span class="tx-12">October 02, 2017 12:44am</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img10.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p> <span class="tx-12">October 01, 2017 10:20pm</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img5.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p> <span class="tx-12">October 01, 2017 6:08pm</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img8.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p> <span class="tx-12">September 27, 2017 6:45am</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img10.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p> <span class="tx-12">September 28, 2017 11:30pm</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img9.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p> <span class="tx-12">September 26, 2017 11:01am</span> </div>
						</div>
						<!-- media -->
					</a>
					<a href="" class="media-list-link read">
						<div class="media pd-x-20 pd-y-15"> <img src="{{asset('backend/img')}}//img5.jpg" class="wd-40 rounded-circle" alt="">
							<div class="media-body">
								<p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p> <span class="tx-12">September 23, 2017 9:19pm</span> </div>
						</div>
						<!-- media -->
					</a>
				</div>
				<!-- media-list -->
			</div>
			<!-- #notifications -->
		</div>
		<!-- tab-content -->
	</div>
	<!-- sl-sideright -->
	<!-- ########## END: RIGHT PANEL ########## --->
	<!-- ########## START: MAIN PANEL ########## -->
	<div class="sl-mainpanel">
		<nav class="breadcrumb sl-breadcrumb"> <a class="breadcrumb-item" href="index.html">{{settings()->short_name}}</a> <span class="breadcrumb-item active">@yield('breadcrumb')</span> </nav>
		<div class="sl-pagebody">
			@yield('content')
		</div>
	</div>
	<!-- sl-mainpanel -->
	<!-- ########## END: MAIN PANEL ########## -->
	<script src="{{asset('backend/lib')}}//jquery/jquery.js"></script>
	<script src="{{asset('backend/lib')}}//popper.js/popper.js"></script>
	<script src="{{asset('backend/lib')}}//bootstrap/bootstrap.js"></script>
	<script src="{{asset('backend/lib')}}//jquery-ui/jquery-ui.js"></script>
	<script src="{{asset('backend')}}/lib/datatables/jquery.dataTables.js"></script>
	<script src="{{asset('backend/lib')}}//perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="{{asset('backend/lib')}}//jquery.sparkline.bower/jquery.sparkline.min.js"></script>
	<script src="{{asset('backend/lib')}}//d3/d3.js"></script>
	<script src="{{asset('backend/lib')}}//rickshaw/rickshaw.min.js"></script>
	<script src="{{asset('backend/lib')}}//chart.js/Chart.js"></script>
	<script src="{{asset('backend/lib')}}//Flot/jquery.flot.js"></script>
	<script src="{{asset('backend/lib')}}//Flot/jquery.flot.pie.js"></script>
	<script src="{{asset('backend/lib')}}//Flot/jquery.flot.resize.js"></script>
	<script src="{{asset('backend/lib')}}//flot-spline/jquery.flot.spline.js"></script>
	<script src="{{asset('backend/js')}}//starlight.js"></script>
	<script src="{{asset('backend/js')}}//ResizeSensor.js"></script>
	<script src="{{asset('backend/js')}}//dashboard.js"></script>
	<script src="{{asset('backend')}}/lib/medium-editor/medium-editor.js"></script>
    <script src="{{asset('backend')}}/lib/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset("js/bootstrap-tagsinput.js")}}"></script>
	<script src="{{asset("js/image-preview.js")}}"></script>
	
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	@if(Session::has('message'))
	<script>
		var toast=toastr["{{Session::get('type')}}"]("{{Session::get('message')}}")
		toast.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "slideIn",
			"hideMethod": "slideOut"
			}

	</script>
	@endif
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function confirmDelete(event){
			Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.isConfirmed) {
				event.preventDefault();
				var link=event.target.dataset['link']
				location.href=link
			}
		})
		}
	</script>
	
	@yield("scripts")
</body>

</html>