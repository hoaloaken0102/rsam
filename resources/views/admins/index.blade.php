<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>APOM | Trang quan tri APOM</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}	" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/admin/pages/css/tasks.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="{{ asset('public/assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}"/>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">

	@if(Auth::guest())
		<script type="text/javascript">
		    window.location = "{{ url('index.html') }}";
		</script>
	@endif

	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="{{ asset('/admin.html') }}">
			<img src="{{ asset('public/assets/admin/layout/img/logo.png') }}" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">

				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="{{ asset('public/assets/admin/layout/img/avatar3_small.jpg') }}"/>
					<span class="username username-hide-on-mobile">
					Hoàng Dương </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> Thông tin cá nhân </a>
						</li>

						<li class="divider">
						</li>

						<li>
							<a href="{{ url('/auth/logout') }}">
							<i class="icon-key"></i> Đăng xuất </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Tìm kiếm...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="{{ url('admin') }}">
					<i class="fa fa-users"></i>
					<span class="title">Trang chủ</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
                </li>


                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Quản lý dữ liệu</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ url('admin/vien-tham') }}">
                                        <i class="fa fa-user"></i>
                                        Viễn thám</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/khi-tuong') }}">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Khí tượng</a>
                                </li>

                            </ul>
                        </li>

                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Quản lý hệ thống</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ url('admin/vai-tro') }}">
                                    <i class="fa fa-user"></i>
                                    Vai trò</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/quyen-han') }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Quyền hạn</a>
                            </li>
                         
                            <li>
                                <a href="{{ url('admin/nguoi-dung') }}">
                                    <i class="fa fa-money"></i>
                                    Người dùng</a>
                            </li>

                        </ul>
                    </li>


                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Quản lý đặt hàng</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ url('admin/don-hang-yeu-cau') }}">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Đơn hàng yêu cầu</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Xử lý đơn hàng đã duyệt</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Thống kê</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Dữ liệu có sẵn</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Dữ liệu đã mất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>



			<!-- END SIDEBAR MENU -->
		</ul>
        </div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- BEGIN PAGE HEADER-->

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"></a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp;
						<span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp;
						<i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 1349
							</div>
							<div class="desc">
								 Số lượng người dùng
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								454
							</div>
							<div class="desc">
                                Đơn đặt hàng trong ngày
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 549
							</div>
							<div class="desc">
								 Dữ liệu mất mát
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-money"></i>
						</div>
						<div class="details">
							<div class="number">
								 23 T
							</div>
							<div class="desc">
								Tổng dung lượng dữ liệu
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			</div>


	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->

	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<script src="{{ asset('public/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('public/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

<script src="{{ asset('public/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('public/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/pages/scripts/index.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/admin/pages/scripts/tasks.js') }}" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>