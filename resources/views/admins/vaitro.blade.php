<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Data Tables - Managed Datatables</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/global/plugins/select2/select2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>
    <link href="{{ asset('public/assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{ asset('public/assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <!-- <img src="../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/> -->
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
                        <img alt="" class="img-circle" src="../assets/admin/layout/img/avatar3_small.jpg"/>
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
                            <a href="login.html">
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
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
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
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
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
        <li class="start">
            <a href="index.html">
                <i class="fa fa-users"></i>
                <span class="title">Trang chủ</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
        </li>


        <li >
            <a href="javascript:;">
                <i class="fa fa-bar-chart"></i>
                <span class="title">Quản lý dữ liệu</span>

            </a>
            <ul class="sub-menu">
                <li>
                    <a href="vien_tham.html">
                        <i class="fa fa-user"></i>
                        Viễn thám</a>
                </li>
                <li>
                    <a href="khi_tuong.html">
                        <i class="fa fa-pencil-square-o"></i>
                        Khí tượng</a>
                </li>

            </ul>
        </li>
        <li class="active open">
            <a href="javascript:;">
                <i class="fa fa-bar-chart"></i>
                <span class="title">Quản lý hệ thống</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="vaitro.html">
                        <i class="fa fa-user"></i>
                        Vai trò</a>
                </li>
                <li>
                    <a href="quyenhan.html">
                        <i class="fa fa-pencil-square-o"></i>
                        Quyền hạn</a>
                </li>
                <li>
                    <a href="nguoi_dung.html">
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
                    <a href="don_hang_yeu_cau.html">
                        <i class="fa fa-pencil-square-o"></i>
                        Đơn hàng yêu cầu</a>
                </li>
                <li>
                    <a href="dang_ky_an.html">
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
                    <a href="nguoi_an.html">
                        <i class="fa fa-pencil-square-o"></i>
                        Dữ liệu có sẵn</a>
                </li>
                <li>
                    <a href="dang_ky_an.html">
                        <i class="fa fa-pencil-square-o"></i>
                        Dữ liệu đã mất</a>
                </li>
            </ul>
        </li>
    </ul>



    <!-- END SIDEBAR MENU -->
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

<!-- END STYLE CUSTOMIZER -->
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Vai rò
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Trang chủ</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="vien_tham.html">Quản lý hệ thống</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="vien_tham.html">Vai trò</a>
        </li>
    </ul>

</div>
<div class="row">

    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box yellow">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Vai trò

            </div>
            <div class="actions">
                <a href="#" class="btn btn-default btn-sm">
                    <i class="fa fa-pencil"></i> Thêm vai trò</a>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id = "tb_vaitro" >
                <thead>
                <tr>
                    <th>
                        Tên
                    </th>

                    <th>
                        Mô tả
                    </th>
                    <th>
                        Hành động
                    </th>


                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX">

                    <td>
                        Người dùng
                    </td>

                    <td>
                        Người dùng có thể tìm kiếm, xem ảnh cùng những thông tin liên quan và tải ảnh về theo các định dạng khuôn mẫu của web
                    </td>
                    <td>

                    </td>
                </tr>

                <tr class="odd gradeX">

                    <td>
                        Quản lý
                    </td>

                    <td>
                        Quản lý xem các thông tin báo cáo của các quản trị viên database cũng như các báo cáo liên quan, ngoài ra quản lý có thể phân quyền cho các quản trị viên DB về lượng công việc cũng như dữ liệu họ cần làm
                    </td>
                    <td>

                    </td>
                </tr>


                <tr class="odd gradeX">

                    <td>
                        Quản trị viên Database
                    </td>

                    <td>

                        Là những người chuyên cập nhật thông tin dữ liệu, báo cáo mất mát dữ liệu,chỉnh sửa và quản lý dữ liệu
                    </td>
                    <td>

                    </td>
                </tr>

                <tr class="odd gradeX">

                    <td>
                        Quản trị hệ thống
                    </td>

                    <td>

                        Là những người giám sát hệ thống trực tiếp mọi công việc như quản lý tài khoản, quản lý đặt hàng,cũng như có những báo cáo cho quản lý.
                    </td>
                    <td>

                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->

</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<div class="page-quick-sidebar-wrapper">
<div class="page-quick-sidebar">
<div class="nav-justified">
<ul class="nav nav-tabs nav-justified">
    <li class="active">
        <a href="#quick_sidebar_tab_1" data-toggle="tab">
            Users <span class="badge badge-danger">2</span>
        </a>
    </li>
    <li>
        <a href="#quick_sidebar_tab_2" data-toggle="tab">
            Alerts <span class="badge badge-success">7</span>
        </a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            More<i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu pull-right" role="menu">
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-bell"></i> Alerts </a>
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-info"></i> Notifications </a>
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-speech"></i> Activities </a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-settings"></i> Settings </a>
            </li>
        </ul>
    </li>
</ul>
<div class="tab-content">
<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
    <h3 class="list-heading">Staff</h3>
    <ul class="media-list list-items">
        <li class="media">
            <div class="media-status">
                <span class="badge badge-success">8</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar3.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Bob Nilson</h4>
                <div class="media-heading-sub">
                    Project Manager
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/admin/layout/img/avatar1.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Nick Larson</h4>
                <div class="media-heading-sub">
                    Art Director
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">3</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar4.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Deon Hubert</h4>
                <div class="media-heading-sub">
                    CTO
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/admin/layout/img/avatar2.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Ella Wong</h4>
                <div class="media-heading-sub">
                    CEO
                </div>
            </div>
        </li>
    </ul>
    <h3 class="list-heading">Customers</h3>
    <ul class="media-list list-items">
        <li class="media">
            <div class="media-status">
                <span class="badge badge-warning">2</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar6.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Lara Kunis</h4>
                <div class="media-heading-sub">
                    CEO, Loop Inc
                </div>
                <div class="media-heading-small">
                    Last seen 03:10 AM
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="label label-sm label-success">new</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar7.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Ernie Kyllonen</h4>
                <div class="media-heading-sub">
                    Project Manager,<br>
                    SmartBizz PTL
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/admin/layout/img/avatar8.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Lisa Stone</h4>
                <div class="media-heading-sub">
                    CTO, Keort Inc
                </div>
                <div class="media-heading-small">
                    Last seen 13:10 PM
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-success">7</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar9.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Deon Portalatin</h4>
                <div class="media-heading-sub">
                    CFO, H&D LTD
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/admin/layout/img/avatar10.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Irina Savikova</h4>
                <div class="media-heading-sub">
                    CEO, Tizda Motors Inc
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">4</span>
            </div>
            <img class="media-object" src="../assets/admin/layout/img/avatar11.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Maria Gomez</h4>
                <div class="media-heading-sub">
                    Manager, Infomatic Inc
                </div>
                <div class="media-heading-small">
                    Last seen 03:10 AM
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="page-quick-sidebar-item">
    <div class="page-quick-sidebar-chat-user">
        <div class="page-quick-sidebar-nav">
            <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
        </div>
        <div class="page-quick-sidebar-chat-user-messages">
            <div class="post out">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar3.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar2.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar3.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar2.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar3.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar2.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar3.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar2.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/admin/layout/img/avatar3.jpg"/>
                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
                </div>
            </div>
        </div>
        <div class="page-quick-sidebar-chat-user-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type a message here...">
                <div class="input-group-btn">
                    <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
<div class="page-quick-sidebar-alerts-list">
<h3 class="list-heading">General</h3>
<ul class="feeds list-items">
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                Just now
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-success">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            Finance Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-danger">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                30 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-success">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-bell-o"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                2 hours
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-default">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            IPO Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
</ul>
<h3 class="list-heading">System</h3>
<ul class="feeds list-items">
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                Just now
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-danger">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            Finance Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-default">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                30 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-success">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-warning">
                        <i class="fa fa-bell-o"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                2 hours
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-info">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            IPO Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
</ul>
</div>
</div>
<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
    <div class="page-quick-sidebar-settings-list">
        <h3 class="list-heading">General Settings</h3>
        <ul class="list-items borderless">
            <li>
                Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
        </ul>
        <h3 class="list-heading">System Settings</h3>
        <ul class="list-items borderless">
            <li>
                Security Level
                <select class="form-control input-inline input-sm input-small">
                    <option value="1">Normal</option>
                    <option value="2" selected>Medium</option>
                    <option value="e">High</option>
                </select>
            </li>
            <li>
                Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
            </li>
            <li>
                Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
            </li>
            <li>
                Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
        </ul>
        <div class="inner-content">
            <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
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
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/table-managed.js"></script>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        TableManaged.init();
    });
</script>
</body>
<!-- END BODY -->
</html>