<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>RSAM</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/dialog.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.pwstabs.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/pwstabs.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/table.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery-ui.css') }}">

        <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/jquery-ui.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

    </head>

    <body>
        
        <div class="header" >
            <!-- <h1 class="title-banner">Hệ thống dữ liệu viễn thám, khí tượng</h1> -->

        </div> <!-- end header -->

        <div id="toolbar">            
            <a href="{!! url('index.html') !!}" style="color: blue;float: left;">Trang chủ</a>
            @if (Auth::guest())
                <!-- <a href="#dialog-profile-box" class="dialog-window button" style="padding: 0px 15px;">Chào mừng DuongND</a>&nbsp;&nbsp; -->
                <a href="#dialog-login-box" class="dialog-window" style="color: blue;float: right;">Đăng nhập</a>
                <a href="#dialog-logout-box" class="dialog-window" style="color: blue;padding: 0px 15px;float: right;">Đăng ký</a>&nbsp;

            @else
                <a href="{{ url('/auth/logout') }}" class="dialog-window" style="color: blue;padding: 0px 15px;float: right;">Thoát</a>&nbsp;&nbsp;
                
                <a href="#dialog-profile-box" class="dialog-window" style="color: blue;padding: 0px 15px;float: right;">Chào mừng {{ Auth::user()->name }}</a>&nbsp;&nbsp;
                <a href="{{url('/home/shopping-card')}}" class="dialog-window" style="color: blue;padding: 0px 15px;float: right;">Giỏ hàng</a>&nbsp;&nbsp;
                
            @endif
            
        </div> <!-- end div option -->

        <span class="content">
            <div class="tabset0">

                <div data-pws-tab="tab1" data-pws-tab-name="Viễn thám" data-pws-tab-icon="fa-refresh fa-spin" >
                    <div class="pws_example_mixed_content_block">
                        <form method="post" action="{{url ('/rs_result')}}"   >
                            <div class="pws_example_mixed_content_left" id="form_search">

                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="button" value="Chọn thuộc tính" class="button_title_feature" >
                                <div class="table_form_feature">
                                    <select class="custom_select_tag" id="type_product">
                                        <option value="Dạng dữ liệu">Dạng dữ liệu</option>
                                        <option value="EOS">EOS</option>
                                        <option value="NPP">NPP</option>

                                    </select>
                                    <select class="custom_select_tag" id="platform" onclick="choose_platform();">
                                        <option value="Nền tảng">Nền tảng</option>
                                        <option value="Aqua" id="Aqua">Aqua</option>
                                        <option value="Terra" id="Terra">Terra</option>
                                    </select>
                                    <select class="custom_select_tag" id="level"onclick="choose_level();">
                                        <option value="Cấp độ sản phẩm">Cấp độ sản phẩm</option>
                                        <option value="Level 1A">Level 1A</option>
                                        <option value="Level 1B">Level 1B</option>
                                        <option value="Level 2">Level 2</option>
                                    </select>


                                    <select class="custom_select_tag" id="type_product" name="type_product">
                                        <option value="Loại sản phẩm">Loại sản phẩm</option>
                                        <option value="MOD01" id="mod01">MOD01</option>
                                        <option value="MYD01" id="myd01">MYD01</option>
                                        <option value="MOD021KM " id="MOD021KM">MOD021KM</option>
                                        <option value="MOD02QKM" id="MOD02QKM">MOD02QKM</option>
                                        <option value="MOD02HKM" id="MOD02HKM">MOD02HKM</option>
                                        <option value="MOD02OBC" id="MOD02OBC">MOD02OBC</option>
                                        <option value="AIRS_AIRS" id="AIRS_AIRS">AIRS_AIRS</option>
                                        <option value="AIRS_VIS" id="AIRS_VIS">AIRS_VIS</option>
                                        <option value="AIRS_MASU" id="AIRS_MASU">AIRS_MASU</option>
                                        <option value="AIRS_HDF5" id="AIRS_HDF5">AIRS_HDF5</option>
                                        <option value="MYD021" id="MYD021KM">MYD021KM</option>
                                        <option value="MYD02OBC" id="MYD02OBC">MYD02OBC</option>
                                        <option value="MYD02QKM" id="MYD02QKM">MYD02QKM</option>
                                        <option value="MYD02HKM" id="MYD02HKM">MYD2HKM</option>
                                        <option value="MYD03" id="MYD03">MYD03</option>
                                        <option value="MOD03" id="MOD03">MOD03</option>
                                        <option value="MOD04" id="MOD04">MOD04</option>
                                        <option value="MOD06" id="MOD06">MOD06</option>
                                        <option value="MOD07" id="MOD07">MOD07</option>
                                        <option value="MOP10" id="MOD10">MOD10</option>
                                        <option value="MOD11" id="MOD11">MOD11</option>
                                        <option value="MOD13" id="MOD13">MOD13</option>
                                        <option value="MOD14" id="MOD14">MOD14</option>
                                        <option value="MOD29" id="MOD29">MOD29</option>
                                        <option value="MOD35" id="MOD35">MOD35</option>
                                        <option value="MODOC" id="MODOC">MODOC</option>
                                        <option value="MODCR" id="MODCR">MODCR</option>
                                        <option value="MYD04" id="MYD04">MYD04</option>
                                        <option value="MYD06" id="MYD06">MYD06</option>
                                        <option value="MYD07" id="MYD07">MYD07</option>
                                        <option value="MYD10" id="MYD10">MYD10</option>
                                        <option value="MYD11" id="MYD11">MYD11</option>
                                        <option value="MYD13" id="MYD13">MYD13</option>
                                        <option value="MYD14" id="MYD14">MYD14</option>
                                        <option value="MYD29" id="MYD29">MYD29</option>
                                        <option value="MYD35" id="MYD35">MYD35</option>
                                        <option value="MYDOC" id="MYDOC">MYDOC</option>
                                        <option value="MYDCR" id="MYDCR">MYDCR</option>
                                    </select>
                                    <script language="JavaScript">
                                        function choose_level(){
                                            var x = document.getElementById('platform');
                                                var i = x.selectedIndex;
                                                var platform=x.options[i].text;
                                            var y = document.getElementById('level');
                                                var j=y.selectedIndex;
                                                var level=y.options[j].text;
                                            if (level=='Level 1A'){
                                                    document.getElementById('myd01').style.display='inline';
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                            }
                                            if (level=='Level 1B'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='inline';
                                                    document.getElementById('MOD02QKM').style.display='inline';
                                                    document.getElementById('MOD02HKM').style.display='inline';
                                                    document.getElementById('MOD02OBC').style.display='inline';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='inline';
                                                    document.getElementById('MYD02QKM').style.display='inline';
                                                    document.getElementById('MYD02HKM').style.display='inline';
                                                    document.getElementById('MYD02OBC').style.display='inline';
                                                    document.getElementById('MYD03').style.display='inline';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='inline';
                                                    document.getElementById('AIRS_MASU').style.display='inline';
                                                    document.getElementById('AIRS_VIS').style.display='inline';
                                                    document.getElementById('AIRS_HDF5').style.display='inline';
                                            }
                                            if (level=='Level 2'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='inline';
                                                    document.getElementById('MOD04').style.display='inline';
                                                    document.getElementById('MOD06').style.display='inline';
                                                    document.getElementById('MOD07').style.display='inline';
                                                    document.getElementById('MOD10').style.display='inline';
                                                    document.getElementById('MOD11').style.display='inline';
                                                    document.getElementById('MOD13').style.display='inline';
                                                    document.getElementById('MOD14').style.display='inline';
                                                    document.getElementById('MOD29').style.display='inline';
                                                    document.getElementById('MOD35').style.display='inline';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='inline';
                                                    document.getElementById('MYD04').style.display='inline';
                                                    document.getElementById('MYD06').style.display='inline';
                                                    document.getElementById('MYD07').style.display='inline';
                                                    document.getElementById('MYD10').style.display='inline';
                                                    document.getElementById('MYD11').style.display='inline';
                                                    document.getElementById('MYD13').style.display='inline';
                                                    document.getElementById('MYD14').style.display='inline';
                                                    document.getElementById('MYD29').style.display='inline';
                                                    document.getElementById('MYD35').style.display='inline';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                            }
                                            if (platform=='Aqua'){
                                                if (level=='Level 1A'){
                                                    document.getElementById('myd01').style.display='inline';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                }
                                                else if(level=='Level 1B'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';

                                                    document.getElementById('AIRS_AIRS').style.display='inline';
                                                    document.getElementById('AIRS_MASU').style.display='inline';
                                                    document.getElementById('AIRS_VIS').style.display='inline';
                                                    document.getElementById('AIRS_HDF5').style.display='inline';
                                                    document.getElementById('MYDOC').style.display='inline';
                                                    document.getElementById('MYDCR').style.display='inline';
                                                    document.getElementById('MYD021KM').style.display='inline';
                                                    document.getElementById('MYD02QKM').style.display='inline';
                                                    document.getElementById('MYD02HKM').style.display='inline';
                                                    document.getElementById('MYD02OBC').style.display='inline';
                                                }
                                                else if(level=='Level 2'){
                                                        document.getElementById('mod01').style.display='none';
                                                        document.getElementById('MOD021KM').style.display='none';
                                                        document.getElementById('MOD02QKM').style.display='none';
                                                        document.getElementById('MOD02HKM').style.display='none';
                                                        document.getElementById('MOD02OBC').style.display='none';
                                                        document.getElementById('MOD03').style.display='none';
                                                        document.getElementById('MOD04').style.display='none';
                                                        document.getElementById('MOD06').style.display='none';
                                                        document.getElementById('MOD07').style.display='none';
                                                        document.getElementById('MOD10').style.display='none';
                                                        document.getElementById('MOD11').style.display='none';
                                                        document.getElementById('MOD13').style.display='none';
                                                        document.getElementById('MOD14').style.display='none';
                                                        document.getElementById('MOD29').style.display='none';
                                                        document.getElementById('MOD35').style.display='none';
                                                        document.getElementById('MODOC').style.display='none';
                                                        document.getElementById('MODCR').style.display='none';
                                                        document.getElementById('AIRS_AIRS').style.display='none';
                                                        document.getElementById('AIRS_MASU').style.display='none';
                                                        document.getElementById('AIRS_VIS').style.display='none';
                                                        document.getElementById('AIRS_HDF5').style.display='none';
                                                        document.getElementById('myd01').style.display='none';
                                                        document.getElementById('MYD03').style.display='none';
                                                        document.getElementById('MYD021KM').style.display='none';
                                                        document.getElementById('MYD02QKM').style.display='none';
                                                        document.getElementById('MYD02HKM').style.display='none';
                                                        document.getElementById('MYD02OBC').style.display='none';
                                                        document.getElementById('MYDOC').style.display='none';
                                                        document.getElementById('MYDCR').style.display='none';
                                                        document.getElementById('MYD04').style.display='inline';
                                                        document.getElementById('MYD06').style.display='inline';
                                                        document.getElementById('MYD07').style.display='inline';
                                                        document.getElementById('MYD10').style.display='inline';
                                                        document.getElementById('MYD11').style.display='inline';
                                                        document.getElementById('MYD13').style.display='inline';
                                                        document.getElementById('MYD14').style.display='inline';
                                                        document.getElementById('MYD29').style.display='inline';
                                                        document.getElementById('MYD35').style.display='inline';
                                                }
                                            }else if(platform=='Terra'){
                                                if (level=='Level 1A'){
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                }
                                                else if (level=='Level 1B'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('MOD021KM').style.display='inline';
                                                    document.getElementById('MOD02QKM').style.display='inline';
                                                    document.getElementById('MOD02HKM').style.display='inline';
                                                    document.getElementById('MOD02OBC').style.display='inline';
                                                }
                                                else if (level=='Level 2'){
                                                        document.getElementById('myd01').style.display='none';
                                                        document.getElementById('MYD021KM').style.display='none';
                                                        document.getElementById('MYD02QKM').style.display='none';
                                                        document.getElementById('MYD02HKM').style.display='none';
                                                        document.getElementById('MYD02OBC').style.display='none';
                                                        document.getElementById('MYD03').style.display='none';
                                                        document.getElementById('MYD04').style.display='none';
                                                        document.getElementById('MYD06').style.display='none';
                                                        document.getElementById('MYD07').style.display='none';
                                                        document.getElementById('MYD10').style.display='none';
                                                        document.getElementById('MYD11').style.display='none';
                                                        document.getElementById('MYD13').style.display='none';
                                                        document.getElementById('MYD14').style.display='none';
                                                        document.getElementById('MYD29').style.display='none';
                                                        document.getElementById('MYD35').style.display='none';
                                                        document.getElementById('MYDOC').style.display='none';
                                                        document.getElementById('MYDCR').style.display='none';
                                                        document.getElementById('AIRS_AIRS').style.display='none';
                                                        document.getElementById('AIRS_MASU').style.display='none';
                                                        document.getElementById('AIRS_VIS').style.display='none';
                                                        document.getElementById('AIRS_HDF5').style.display='none';
                                                        document.getElementById('mod01').style.display='none';
                                                        document.getElementById('MOD03').style.display='none';
                                                        document.getElementById('MOD021KM').style.display='none';
                                                        document.getElementById('MOD02QKM').style.display='none';
                                                        document.getElementById('MOD02HKM').style.display='none';
                                                        document.getElementById('MOD02OBC').style.display='none';
                                                        document.getElementById('MODOC').style.display='none';
                                                        document.getElementById('MODCR').style.display='none';
                                                        document.getElementById('MOD04').style.display='inline';
                                                        document.getElementById('MOD06').style.display='inline';
                                                        document.getElementById('MOD07').style.display='inline';
                                                        document.getElementById('MOD10').style.display='inline';
                                                        document.getElementById('MOD11').style.display='inline';
                                                        document.getElementById('MOD13').style.display='inline';
                                                        document.getElementById('MOD14').style.display='inline';
                                                        document.getElementById('MOD29').style.display='inline';
                                                        document.getElementById('MOD35').style.display='inline';
                                                }
                                            }
                                        }
                                        function choose_platform(){
                                            var x = document.getElementById('platform');
                                                var i = x.selectedIndex;
                                                var platform=x.options[i].text;
                                            var y = document.getElementById('level');
                                                var j=y.selectedIndex;
                                                var level=y.options[j].text;
                                            if (platform =='Aqua'){
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('myd01').style.display='inline';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='inline';
                                                    document.getElementById('MYD02QKM').style.display='inline';
                                                    document.getElementById('MYD02HKM').style.display='inline';
                                                    document.getElementById('MYD02OBC').style.display='inline';
                                                    document.getElementById('MYD03').style.display='inline';
                                                    document.getElementById('MYD04').style.display='inline';
                                                    document.getElementById('MYD06').style.display='inline';
                                                    document.getElementById('MYD07').style.display='inline';
                                                    document.getElementById('MYD10').style.display='inline';
                                                    document.getElementById('MYD11').style.display='inline';
                                                    document.getElementById('MYD13').style.display='inline';
                                                    document.getElementById('MYD14').style.display='inline';
                                                    document.getElementById('MYD29').style.display='inline';
                                                    document.getElementById('MYD35').style.display='inline';
                                                    document.getElementById('MYDOC').style.display='inline';
                                                    document.getElementById('MYDCR').style.display='inline';
                                                    document.getElementById('AIRS_AIRS').style.display='inline';
                                                    document.getElementById('AIRS_MASU').style.display='inline';
                                                    document.getElementById('AIRS_VIS').style.display='inline';
                                                    document.getElementById('AIRS_HDF5').style.display='inline';
                                            }
                                            if (platform=='Terra'){
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='inline';
                                                    document.getElementById('MOD02QKM').style.display='inline';
                                                    document.getElementById('MOD02HKM').style.display='inline';
                                                    document.getElementById('MOD02OBC').style.display='inline';
                                                    document.getElementById('MOD03').style.display='inline';
                                                    document.getElementById('MOD04').style.display='inline';
                                                    document.getElementById('MOD06').style.display='inline';
                                                    document.getElementById('MOD07').style.display='inline';
                                                    document.getElementById('MOD10').style.display='inline';
                                                    document.getElementById('MOD11').style.display='inline';
                                                    document.getElementById('MOD13').style.display='inline';
                                                    document.getElementById('MOD14').style.display='inline';
                                                    document.getElementById('MOD29').style.display='inline';
                                                    document.getElementById('MOD35').style.display='inline';
                                                    document.getElementById('MODOC').style.display='inline';
                                                    document.getElementById('MODCR').style.display='inline';
                                                    document.getElementById('MYD021KM').style.display='inline';
                                                    document.getElementById('MYD02QKM').style.display='inline';
                                                    document.getElementById('MYD02HKM').style.display='inline';
                                                    document.getElementById('MYD02OBC').style.display='inline';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                            }
                                            if (level=='Level 1A'){
                                                if (platform=='Aqua'){
                                                    document.getElementById('myd01').style.display='inline';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                }
                                                else if (platform=='Terra'){
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                }
                                            else if(level=='Level 1B'){
                                                if (platform=='Aqua'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('mod01').style.display='none';
                                                    document.getElementById('MOD021KM').style.display='none';
                                                    document.getElementById('MOD02QKM').style.display='none';
                                                    document.getElementById('MOD02HKM').style.display='none';
                                                    document.getElementById('MOD02OBC').style.display='none';
                                                    document.getElementById('MOD03').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('MODOC').style.display='none';
                                                    document.getElementById('MODCR').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';

                                                    document.getElementById('AIRS_AIRS').style.display='inline';
                                                    document.getElementById('AIRS_MASU').style.display='inline';
                                                    document.getElementById('AIRS_VIS').style.display='inline';
                                                    document.getElementById('AIRS_HDF5').style.display='inline';
                                                    document.getElementById('MYDOC').style.display='inline';
                                                    document.getElementById('MYDCR').style.display='inline';
                                                    document.getElementById('MYD021KM').style.display='inline';
                                                    document.getElementById('MYD02QKM').style.display='inline';
                                                    document.getElementById('MYD02HKM').style.display='inline';
                                                    document.getElementById('MYD02OBC').style.display='inline';
                                                }
                                                else if (platform=='Terra'){
                                                    document.getElementById('myd01').style.display='none';
                                                    document.getElementById('MYD021KM').style.display='none';
                                                    document.getElementById('MYD02QKM').style.display='none';
                                                    document.getElementById('MYD02HKM').style.display='none';
                                                    document.getElementById('MYD02OBC').style.display='none';
                                                    document.getElementById('MYD03').style.display='none';
                                                    document.getElementById('MYD04').style.display='none';
                                                    document.getElementById('MYD06').style.display='none';
                                                    document.getElementById('MYD07').style.display='none';
                                                    document.getElementById('MYD10').style.display='none';
                                                    document.getElementById('MYD11').style.display='none';
                                                    document.getElementById('MYD13').style.display='none';
                                                    document.getElementById('MYD14').style.display='none';
                                                    document.getElementById('MYD29').style.display='none';
                                                    document.getElementById('MYD35').style.display='none';
                                                    document.getElementById('MYDOC').style.display='none';
                                                    document.getElementById('MYDCR').style.display='none';
                                                    document.getElementById('MOD04').style.display='none';
                                                    document.getElementById('MOD06').style.display='none';
                                                    document.getElementById('MOD07').style.display='none';
                                                    document.getElementById('MOD10').style.display='none';
                                                    document.getElementById('MOD11').style.display='none';
                                                    document.getElementById('MOD13').style.display='none';
                                                    document.getElementById('MOD14').style.display='none';
                                                    document.getElementById('MOD29').style.display='none';
                                                    document.getElementById('MOD35').style.display='none';
                                                    document.getElementById('AIRS_AIRS').style.display='none';
                                                    document.getElementById('AIRS_MASU').style.display='none';
                                                    document.getElementById('AIRS_VIS').style.display='none';
                                                    document.getElementById('AIRS_HDF5').style.display='none';
                                                    document.getElementById('mod01').style.display='inline';
                                                    document.getElementById('MOD021KM').style.display='inline';
                                                    document.getElementById('MOD02QKM').style.display='inline';
                                                    document.getElementById('MOD02HKM').style.display='inline';
                                                    document.getElementById('MOD02OBC').style.display='inline';
                                                }
                                            }else if (level=='Level 2'){
                                                if (platform=='Aqua'){
                                                        document.getElementById('mod01').style.display='none';
                                                        document.getElementById('MOD021KM').style.display='none';
                                                        document.getElementById('MOD02QKM').style.display='none';
                                                        document.getElementById('MOD02HKM').style.display='none';
                                                        document.getElementById('MOD02OBC').style.display='none';
                                                        document.getElementById('MOD03').style.display='none';
                                                        document.getElementById('MOD04').style.display='none';
                                                        document.getElementById('MOD06').style.display='none';
                                                        document.getElementById('MOD07').style.display='none';
                                                        document.getElementById('MOD10').style.display='none';
                                                        document.getElementById('MOD11').style.display='none';
                                                        document.getElementById('MOD13').style.display='none';
                                                        document.getElementById('MOD14').style.display='none';
                                                        document.getElementById('MOD29').style.display='none';
                                                        document.getElementById('MOD35').style.display='none';
                                                        document.getElementById('MODOC').style.display='none';
                                                        document.getElementById('MODCR').style.display='none';
                                                        document.getElementById('AIRS_AIRS').style.display='none';
                                                        document.getElementById('AIRS_MASU').style.display='none';
                                                        document.getElementById('AIRS_VIS').style.display='none';
                                                        document.getElementById('AIRS_HDF5').style.display='none';
                                                        document.getElementById('myd01').style.display='none';
                                                        document.getElementById('MYD03').style.display='none';
                                                        document.getElementById('MYD021KM').style.display='none';
                                                        document.getElementById('MYD02QKM').style.display='none';
                                                        document.getElementById('MYD02HKM').style.display='none';
                                                        document.getElementById('MYD02OBC').style.display='none';
                                                        document.getElementById('MYDOC').style.display='none';
                                                        document.getElementById('MYDCR').style.display='none';
                                                        document.getElementById('MYD04').style.display='inline';
                                                        document.getElementById('MYD06').style.display='inline';
                                                        document.getElementById('MYD07').style.display='inline';
                                                        document.getElementById('MYD10').style.display='inline';
                                                        document.getElementById('MYD11').style.display='inline';
                                                        document.getElementById('MYD13').style.display='inline';
                                                        document.getElementById('MYD14').style.display='inline';
                                                        document.getElementById('MYD29').style.display='inline';
                                                        document.getElementById('MYD35').style.display='inline';
                                                }
                                                else if (platform=='Terra'){
                                                        document.getElementById('myd01').style.display='none';
                                                        document.getElementById('MYD021KM').style.display='none';
                                                        document.getElementById('MYD02QKM').style.display='none';
                                                        document.getElementById('MYD02HKM').style.display='none';
                                                        document.getElementById('MYD02OBC').style.display='none';
                                                        document.getElementById('MYD03').style.display='none';
                                                        document.getElementById('MYD04').style.display='none';
                                                        document.getElementById('MYD06').style.display='none';
                                                        document.getElementById('MYD07').style.display='none';
                                                        document.getElementById('MYD10').style.display='none';
                                                        document.getElementById('MYD11').style.display='none';
                                                        document.getElementById('MYD13').style.display='none';
                                                        document.getElementById('MYD14').style.display='none';
                                                        document.getElementById('MYD29').style.display='none';
                                                        document.getElementById('MYD35').style.display='none';
                                                        document.getElementById('MYDOC').style.display='none';
                                                        document.getElementById('MYDCR').style.display='none';
                                                        document.getElementById('AIRS_AIRS').style.display='none';
                                                        document.getElementById('AIRS_MASU').style.display='none';
                                                        document.getElementById('AIRS_VIS').style.display='none';
                                                        document.getElementById('AIRS_HDF5').style.display='none';
                                                        document.getElementById('mod01').style.display='none';
                                                        document.getElementById('MOD03').style.display='none';
                                                        document.getElementById('MOD021KM').style.display='none';
                                                        document.getElementById('MOD02QKM').style.display='none';
                                                        document.getElementById('MOD02HKM').style.display='none';
                                                        document.getElementById('MOD02OBC').style.display='none';
                                                        document.getElementById('MODOC').style.display='none';
                                                        document.getElementById('MODCR').style.display='none';
                                                        document.getElementById('MOD04').style.display='inline';
                                                        document.getElementById('MOD06').style.display='inline';
                                                        document.getElementById('MOD07').style.display='inline';
                                                        document.getElementById('MOD10').style.display='inline';
                                                        document.getElementById('MOD11').style.display='inline';
                                                        document.getElementById('MOD13').style.display='inline';
                                                        document.getElementById('MOD14').style.display='inline';
                                                        document.getElementById('MOD29').style.display='inline';
                                                        document.getElementById('MOD35').style.display='inline';
                                                }
                                            }

                                        }

                                     }
                                    </script>
                                </div>

                                <input type="button" value="Chọn thời gian" class="button_title_time" >
                                <div class="table_form_time">
                                    <label id="level" style="color: black;margin-left: 10px;">Thời gian từ:</label> <br/>
                                    <input type="date" id="date_from" name="date_from" style="margin-left: 10px;margin-top: 2px;margin-bottom: 20px;box-shadow: 1px 1px 1px #888888; border:1px solid #9D9DA2;height: 30px;"><br>

                                    <label id="level" style="color: black;margin-left: 10px;">Thời gian đến:</label> <br/>
                                    <input type="date" id="date_to" name="date_to" style="margin-left: 10px;margin-top: 2px;margin-bottom: 20px;box-shadow: 1px 1px 1px #888888; border:1px solid #9D9DA2;height: 30px;"><br>

                                </div>
                                <input type="button" value="Không gian" class="button_title_feature" style="border: 1px solid blue;" >
                                <div class="table_form_feature" style="height: auto;background-color: white;border: 1px solid blue;"><br/><br/>
                                <label style="color: black;margin-left: 10px;">Tren trai:</label>
                                <label style="color: black;margin-left: 10px;float: right;margin-right: 78px;">Duoi trai:</label><br/>
                                <input type="text" style="box-shadow: 1px 1px 1px #888888;width: 120px;margin-left: 10px;float: left;" >
                                <input type="text" style="box-shadow: 1px 1px 1px #888888;width: 120px;float: right;margin-right: 10px" ><br/>
                                <p style="margin-top: 20px;"></p>

                                <label style="color: black;margin-left: 10px;">Tren phai:</label>
                                <label style="color: black;margin-left: 10px;float: right;margin-right: 78px;">Duoi phai:</label><br/>
                                <input type="text" style="box-shadow: 1px 1px 1px #888888;width: 120px;margin-left: 10px;float: left;" >
                                <input type="text" style="box-shadow: 1px 1px 1px #888888;width: 120px;float: right;margin-right: 10px" ><br/>
                                <p style="margin-top: 20px;"></p>
                                </div>
                                <input type="hidden" name="_token" value=" {{ csrf_token() }}">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                                <input type="submit" style="margin-left: 20px; margin-top: 20px ;border: 1px double black; width: 80px;height: 30px; background-color: white" value="Tìm kiếm" onclick="show_result('form_search','form_result');" >


                        </div><!-- pws_example_mixed_content_left -->
                    </form>




                        <div class="pws_example_mixed_content_right" >
                            <div style="width: 100%;height: 99%;border: 1px solid blue;margin-bottom: 10px;padding-top: 7px;background-color: white;">


                                <div id="map" style="height: 100%;margin-top: -7px;"></div>
                                <script>
                                    function initMap() {
                                      var uluru = {lat: 21.0216, lng: 105.4657};
                                      var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 4,
                                        center: uluru
                                      });

                                      var contentString = '<div id="content">'+
                                          '<div id="siteNotice">'+
                                          '</div>'+

                                          '<div id="bodyContent">'+
                                          '<p><b>Trung tâm fimo</b>' +
                                          '</div>'+
                                          '</div>';

                                      var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                      });

                                      var marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map,
                                        title: 'Uluru (Ayers Rock)'
                                      });
                                      marker.addListener('click', function() {
                                        infowindow.open(map, marker);
                                      });
                                    }

                                </script>
                                <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPgZPImlcrZ5Wffcmglv6XmFQgaNbG1dI&callback=initMap">
                                </script>
                            </div>
                            <div>
                                
                            </div>
                        </div><!-- pws_example_mixed_content_right -->
                    </div><!-- pws_example_mixed_content_block -->
                </div>
        





















                 <div data-pws-tab="tab2" data-pws-tab-name="Khí tượng" data-pws-tab-icon="fa-child">

                    <!-- start pws_example_mixed_content_left -->
                    <div class="pws_example_mixed_content_left" >

                        <input type="button" value="Thuộc tính" class="button_title_feature" style="border: 1px solid blue;" >
                        <div class="table_form_feature" style="height: auto;background-color: white;border: 1px solid blue;"><br/><br/>
                            <label style="color: black;margin-left: 10px;">Thành phần:</label> <br/>
                            <select class="custom_select_tag" id="variable" name="variable" style="margin-top: 2px;margin-bottom: 20px;">
                                <option value="pr" selected >Lượng mưa</option>
                                <option value="ps">Áp suất</option>
                                <option value="sst">Nhiệt đồ bề mặt biển</option>
                                <option value="temp">Nhiệt độ</option>
                                <option value="temp2m">Nhiệt độ 2m</option>
                                <option value="wind">Gió</option>

                            </select>

                            <span id="add-level" ></span>

                            <label id="level-variable" style="color: black;margin-left: 10px;">Cấp độ:</label> <br/>
                            <select class="custom_select_tag" id="level-option" name="level-option" style="margin-top: 2px;margin-bottom: 20px;">
                                <option value="1000">1000mb</option>
                                <option value="850">850mb</option>
                                <option value="500">500mb</option>
                                <option value="200">250mb</option>
                            </select>

                            <label style="color: black;margin-left: 10px;">Loại đầu ra:</label> <br/>
                            <select class="custom_select_tag" id="type-result" name="type-result" style="margin-top: 2px;margin-bottom: 20px;">
                                <option value="map">Bản đồ</option>
                                <option value="chart">Biểu đồ</option>
                                
                            </select>

                            <span id="add-type-map" ></span>

                            <label id="label-type-map" style="color: black;margin-left: 10px;">Dạng biểu đồ:</label> <br/>
                            <select class="custom_select_tag" id="type-map" name="type-map" style="margin-top: 2px;margin-bottom: 20px;">
                                <option value="shaded" selected >shaded</option>
                                <option value="contour">contour</option>
                                
                            </select>

                        </div> <!-- end div 'thuộc tính' -->

                        <script type="text/javascript">
                            
                        </script>

                        <input type="button" value="Thời gian" class="button_title_feature" style="border: 1px solid blue;" >
                        <div class="table_form_feature" style="height: auto;background-color: white;border: 1px solid blue;"><br/><br/>
                            <label style="color: black;margin-left: 10px;">Thang tỷ lệ:</label> <br/>
                            <select class="custom_select_tag" id="time-date" name="time-date" style="margin-top: 2px;margin-bottom: 20px;">
                                <option value="daily" selected >Hàng ngày</option>
                                <option value="monthly">Hàng tháng</option>
                                <option value="year">Hàng năm</option>

                            </select>
                        <div id="div-add-date-time" >
                        </div>
                        <div id="div-date-time" >
                            
                            <span id="add-from-date" ></span>
                            <label id="label-time" style="color: black;margin-left: 10px;">Thời gian từ:</label> <br/>
                            <input type="text" id="fromDate" class="fromDate time" name="fromDate" value="02-03-2012" placeholder="dd-mm-yyyy" ><br/> 
    

                            <label id="label-time" style="color: black;margin-left: 10px;">Thời gian đến:</label> <br/>
                            <span id="add-to-date" ></span>
                            <input type="text" id="toDate" class="toDate time" name="toDate" value="04-03-2012" placeholder="dd-mm-yyyy" ><br/>
                        </div>
                        </div>  <!-- end div 'thời gian' -->










                        <input type="button" value="Không gian" class="button_title_feature" style="border: 1px solid blue;" >
                        <div class="table_form_feature" style="height: auto;background-color: white;border: 1px solid blue;"><br/><br/>
                           <label style="color: black;margin-left: 10px;">Min lat:</label>
                           <label style="color: black;margin-left: 10px;float: right;margin-right: 78px;">Max lat:</label><br/>
                            <input type="text" id="minlat" name="minlat" value="7" style="width: 120px;margin-left: 10px;float: left;" ></input>
                            <input type="text" id="maxlat" name="maxlat" value="30" style="width: 120px;float: right;margin-right: 10px" ></input><br/>
                            <p style="margin-top: 20px;"></p>
                            
                            <label style="color: black;margin-left: 10px;">Min lon:</label>
                           <label style="color: black;margin-left: 10px;float: right;margin-right: 78px;">Max lon:</label><br/>
                            <input type="text" id="minlon" name="minlon" value="90" style="width: 120px;margin-left: 10px;float: left;" ></input>
                            <input type="text" id="maxlon" name="maxlon" value="120" style="width: 120px;float: right;margin-right: 10px" ></input><br/>
                            <p style="margin-top: 20px;"></p>

                            



                        </div> <!-- end div 'không gian' -->



                    </div> <!-- end pws_example_mixed_content_left -->

                    <!-- start pws_example_mixed_content_right -->
                    <div class="pws_example_mixed_content_right" >
                        <div style="width: 100%;height: 7%;border: 1px solid blue;margin-bottom: 10px;padding-top: 7px;">
                            <!-- <a class="button" id="plot" style="padding: 0px 15px;text-decoration: none;margin-left: 5px;">Plot</a> -->
                            <input type="button" class="button" id="plot" style="padding: 0px 15px;text-decoration: none;margin-left: 5px;" value="Tạo ảnh"></input>
                            <a class="button" id="reset" style="padding: 0px 15px;text-decoration: none;">Đặt lại</a>

                            <select class="custom_select_tag" id="option-time" style="margin-top: 7px;width: 150px;">

                            </select>
                            <a class="button" id="create-animation" style="padding: 0px 15px;text-decoration: none;">Tạo ảnh động</a>


                            @if (!Auth::guest())
                                <a href="#dialog-add-shopping-card-box" class="dialog-window button" id="dialog-shopping-card" style="padding: 0px 15px;text-decoration: none;margin-left: 10px;">Thêm giỏ hàng</a>
                            @endif
                            

                            <a href="#dialog-download-box" class="dialog-window button" id="dialog-download" style="padding: 0px 15px;text-decoration: none;">Tải về</a>
                        </div> <!-- end option -->

                       

                        <div style="width: 97.6%%;height: 90%;;border: 1px solid blue;padding: 10px">
                            <img id="plot-result" src="{{ asset('public/img/plot-example.png') }}" width="100%" height="100%" >
                            <span id="not-data" >Không có dữ liệu.</span>
                        </div>
                    </div> <!-- end pws_example_mixed_content_right -->
                    
                    
                </div>
            </div><!-- tabset0 -->


        </span><!-- content -->
        <div class="footer">
            &copy; 2016 - Copy right by RSAM
        </div><!-- footer -->


        @yield('option')

        <!-- start div login-box -->
        <div id="dialog-login-box" class="dialog">
            <p class="dialog_title"> Đăng nhập</p> <br /><br />
            <a href="#" class="close"><img src="{{ asset('public/img/close.png') }}" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" id="form-login" class="login-content" action="{{ url('/auth/login') }}" role="form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="email">
                <span>Email:</span>
                <input id="email_login" name="email_login" type="email" autocomplete="on" placeholder="example@gmail.com">
                </label><br/>
                <label class="password">
                <span>Mật khẩu:</span>
                <input id="password_login" name="password_login" type="password" placeholder="Mật khẩu">
                </label>

                <button class="button submit-button" type="submit" style="margin-left: 0px;" >Đăng nhập</button>
                <span style="margin-top: -40px;margin-bottom: 30px;margin-left: 170px;text-decoration: underline;"> 
                <!-- <a class="reset-password" href="dialog-reset-password">Quên mật khẩu?</a> -->
                <a href="#dialog-reset-box" class="reset-password">Quên mật khẩu</a>
                </span><br /><br /> 

            </form>
        </div> <!-- end div login-box -->
               
        </div>
        
        <!-- start div login-box -->
        <div id="dialog-reset-box" class="dialog">
            <p class="dialog_title"> Quên mật khẩu</p> <br /><br />
            <a href="#" class="close"><img src="{{ asset('public/img/close.png') }}" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" id="form-reset-password" class="login-content" action="{{ url('reset-password') }}" role="form" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="email">
                <span>Email:</span>
                <input id="email_reset_password" name="email_reset_password" type="email" autocomplete="on" placeholder="example@gmail.com">
                </label><br/>

                <button class="button submit-button" type="submit" style="margin-bottom: 40px;margin-top: 5px;" >Gửi mail</button>
                

            </form>
        </div> <!-- end div login-box -->


        <!-- start div logout-box -->
        <div id="dialog-logout-box" class="dialog">
            <p class="dialog_title"> Đăng ký</p> <br /><br />
            <a href="#" class="close"><img src="{{ asset('public/img/close.png') }}" class="img-close" title="Close Window" alt="Close" /></a>

            <form method="post" id="form-register" class="login-content" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="role" value="1">
                <label class="name">
                <span>Họ tên:</span><input id="name_register" name="name_register" type="text" autocomplete="on" placeholder="Họ và tên">
                </label><br />
                <label class="email">
                <span>Email:</span><input id="email_register" name="email_register" type="email" autocomplete="on" placeholder="example@gmail.com">
                </label><br />
                <label class="password">
                <span>Mật khẩu:</span><input id="password_register" name="password_register" type="password" placeholder="Mật khẩu">
                </label><br />
                <label class="password">
                <span>Gõ lại mật khẩu:</span><input id="password_confirmation_register" name="password_confirmation_register" type="password" placeholder="Gõ lại mật khẩu">
                </label><br />
                <button class="button submit-button" type="submit">Đăng ký</button>
            </form>
        </div><!-- end div logout-box -->

        

        <!-- start div download-box -->
        <div id="dialog-download-box" class="dialog">
            <p class="dialog_title">Tải về</p> <br /><br />
            <a href="#" class="close"><img src="{{ asset('public/img/close.png') }}" class="img-close" title="Close Window" alt="Close" /></a>
            <form class="login-content" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div id="list-result-png" style="width: 380px;height: 200px;overflow: auto;border: 1px solid blue;margin-bottom: 6px;">
                    <!-- <input type="checkbox" style="width: 17px" ></input>
                    <label style="margin-left: 30px;margin-top: -25px;" >nhietdo.10.6.2012.png</label> <br/>
                    <input type="checkbox" style="width: 17px" ></input>
                     -->
                </div>
                <input id="select-all-result-png" type="checkbox" style="width: 17px" id="select-all" ></input>
                <label style="margin-left: 30px;margin-top: -25px;" >Chọn tất cả</label> <br/>

                <button id="download-png" class="button submit-button" type="button" style="margin-bottom: 40px;margin-top: 5px;" >Tải về</button>
                

            </form>
        </div> <!-- end div download-box -->

        <!-- start div add-shopping-card-box -->
        <div id="dialog-add-shopping-card-box" class="dialog">
            <p class="dialog_title">Giỏ hàng</p> <br /><br />
            <a href="#" class="close"><img src="{{ asset('public/img/close.png') }}" class="img-close" title="Close Window" alt="Close" /></a>
            <form class="login-content" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if (!Auth::guest())
                    <input type="hidden" id="userId" value="{{ Auth::user()->id }}">
                @endif

                <div id="list-result-filename" style="width: 380px;height: 200px;overflow: auto;border: 1px solid blue;margin-bottom: 6px;">
                    <!-- <input type="checkbox" style="width: 17px" ></input>
                    <label style="margin-left: 30px;margin-top: -25px;" >nhietdo.10.6.2012.png</label> <br/>
                    <input type="checkbox" style="width: 17px" ></input>
                     -->
                </div>
                <input id="select-all-result-filename" type="checkbox" style="width: 17px" id="select-all" ></input>
                <label style="margin-left: 30px;margin-top: -25px;" >Chọn tất cả</label> <br/>

                <button id="add-shopping-card" class="button submit-button" type="button" style="margin-bottom: 40px;margin-top: 5px;" >Thêm vào giỏ</button>
                

            </form>
        </div> <!-- end div add-shopping-card-box -->


        @yield("shoppingcard")

        @yield("profile_and_view_order")

























        <script type="text/javascript" src="{{ asset('public/js/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/jquery.pwstabs.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/dialog.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/mydatepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/meteo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/meteo-input.js') }}"></script>
        

        <script  type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.tabset0').pwstabs();

            });
        </script>

        <script type="text/javascript">
            $("#form-login").validate({
                rules:{
                    email_login:{
                        required: true,
                        email: true

                    },
                    password_login:{
                        required: true,
                        minlength: 6
                    }
                },
                messages:{
                    email_login:{
                        required: "Vui lòng nhập Email.",
                        email: "Email không đúng định dạng."
                    },
                    password_login:{
                        required: "Vui lòng nhập mật khẩu.",
                        minlength: "Mật khẩu tối thiếu 6 ký tự."
                    }
                }
            });

            $("#form-reset-password").validate({
                rules:{
                    email_reset_password:{
                        required: true,
                        email: true,
                    }
                },
                messages:{
                    email_reset_password:{
                        required: "Vui lòng nhập Email.",
                        email: "Email không đúng định dạng.",
                    }
                }
            });

            $("#form-register").validate({
                rules:{
                    name_register:{
                        required: true
                    },
                    email_register:{
                        required: true,
                        email: true
                    },
                    password_register:{
                        required: true,
                        minlength: 6
                    },
                    password_confirmation_register:{
                        required: true,
                        equalTo: "#password_register"
                    }
                },
                messages:{
                    name_register:{
                        required: "Vui lòng nhập họ tên.",
                    },
                    email_register:{
                        required: "Vui lòng nhập Email.",
                        email: "Email không đúng định dạng."
                    },
                    password_register:{
                        required: "Vui lòng nhập mật khẩu.",
                        minlength: "Mật khẩu tối thiếu 6 ký tự."
                    },
                    password_confirmation_register:{
                        required: "Vui lòng nhập mật khẩu.",
                        equalTo: "Mật khẩu xác nhận không đúng."
                    }
                }
            });

        </script>

    </body>
</html>