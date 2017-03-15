<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Administrator KLINIK dr. M. Suherman</title>

    <meta name="description" content="Mailbox with some customizations as described in docs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('assets/css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- inline styles related to this page -->
    <script src="{{asset('ck/ckeditor.js')}}"></script>
    <!-- ace settings handler -->
    <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Administrator - Klinik Rawat Inap dr. M. Suherman
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li>
                    <a href="../../../logoutadmin">
                        <i class="ace-icon fa fa-power-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <h4>Menu</h4>
            </div>
            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active open">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Berita </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="../berita/aktivitasfisik">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Aktivitas Fisik
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="active">
                        <a href="../berita/polamakandash">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pola Makan DASH
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../berita/beratbadansehat">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Berat Badan Sehat
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../berita/dietsodium">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Diet Sodium
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../berita/dietalkohol">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Diet Alkohol
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Data Akun </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="../akun/dokter">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Dokter
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../akun/pasien">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pasien
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../akun/admin">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Admin
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="../jadwaldokter">
                    <i class="menu-icon fa fa-calendar"></i>
                    <span class="menu-text">Jadwal Dokter</span>
                </a>

                <b class="arrow"></b>
            </li>
        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Berita</a>
                    </li>
                    <li class="active">Pola Makan DASH</li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Berita
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Pola Makan DASH
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tabbable">
                                    <ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
                                        <li class="li-new-mail pull-right">
                                            <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Buat Posting</span>
														</span>
                                            </a>
                                        </li><!-- /.li-new-mail -->
                                    </ul>

                                    <div class="tab-content no-border no-padding">
                                        <div id="inbox" class="tab-pane in active">
                                            <div class="message-container">

                                                <!--<div id="id-message-new-navbar" class="hide message-navbar clearfix">
                                                    <div class="message-bar">
                                                        <div class="message-toolbar">
                                                            <button type="submit" class="btn btn-xs btn-white btn-primary">
                                                                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                                                <span class="bigger-110">Terbitkan</span>
                                                            </button>

                                                            <a href="aktivitasfisik" type="button" class="btn btn-xs btn-white btn-primary">
                                                                <i class="ace-icon fa fa-times bigger-125 orange2"></i>
                                                                <span class="bigger-110">Batal</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            --></div>
                                        </div>
                                    </div><!-- /.tab-content -->
                                </div><!-- /.tabbable -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <form id="id-message-form" action="polamakandash" class="hide form-horizontal message-form col-xs-12" enctype="multipart/form-data" method="POST">
                            {{csrf_field()}}
                            {{method_field('post')}}
                            <div class="tab-content no-border no-padding">
                                <div id="inbox" class="tab-pane in active">
                                    <div class="message-container">

                                        <div id="id-message-new-navbar" class="hide message-navbar clearfix">
                                            <div class="message-bar">
                                                <div class="message-toolbar">
                                                    <button type="submit" class="btn btn-xs btn-white btn-primary">
                                                        <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                                        <span class="bigger-110">Terbitkan</span>
                                                    </button>

                                                    <a href="polamakandash" type="button" class="btn btn-xs btn-white btn-primary">
                                                        <i class="ace-icon fa fa-times bigger-125 orange2"></i>
                                                        <span class="bigger-110">Batal</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.tab-content -->
                            <div>
                                <div class="hr hr-18 dotted"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Judul:</label>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="input-icon block col-xs-12 no-padding">
                                            <input maxlength="100" type="text" class="col-xs-12" name="judul_posting" id="form-field-subject" placeholder="Judul Postingan" required />
                                            <i class="ace-icon fa fa-comment-o"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr-18 dotted"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right">
                                        <span class="inline space-24 hidden-480"></span>
                                        Isi:
                                    </label>

                                    <div class="col-sm-9">
                                        <textarea name="isi_posting" id="editorposting" cols="10" rows="5" required></textarea>
                                        <!--<div class="wysiwyg-editor" name="isi_posting"></div>-->
                                    </div>
                                </div>

                                <div class="hr hr-18 dotted"></div>

                                <div class="form-group no-margin-bottom">
                                    <label class="col-sm-3 control-label no-padding-right">Gambar:</label>

                                    <div class="col-sm-9">
                                        <div id="form-attachments">
                                            <input type="file" name="gambar_posting" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="space"></div>
                            </div>
                        </form>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-header">
                                    Postingan
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th class="hidden-480">Status</th>

                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach($daftarposting as $posting)
                                        <tr>
                                            <td class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td>{{$posting->id_posting}}</td>
                                            <td>{{$posting->judul_posting}}</td>

                                            <td class="hidden-480">
                                                <span class="label label-sm label-info arrowed arrowed-righ">Published</span>
                                            </td>

                                            <td>
                                                <div class="hidden-sm hidden-xs action-buttons">
                                                    <a class="blue" href="../../detail/{{$posting->id_posting}}">
                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                    </a>

                                                    <a class="green" href="edit/{{$posting->id_posting}}">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="deletepostingpolamakandash/{{$posting->id_posting}}">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="../../detail/{{$posting->id_posting}}" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="edit/{{$posting->id_posting}}" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="deletepostingpolamakandash/{{$posting->id_posting}}" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('assets/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('assets/js/bootstrap-tag.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hotkeys.index.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
<script src="{{asset('assets/js/ace.min.js')}}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($){

        //handling tabs and loading/displaying relevant messages and forms
        //not needed if using the alternative view, as described in docs
        $('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var currentTab = $(e.target).data('target');
            if(currentTab == 'write') {
                Inbox.show_form();
            }
            else if(currentTab == 'inbox') {
                Inbox.show_list();
            }
        })



        //basic initializations
        $('.message-list .message-item input[type=checkbox]').removeAttr('checked');
        $('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
            $(this).closest('.message-item').toggleClass('selected');
            if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
            else {
                Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
                //determine number of selected messages and display/hide action toolbar accordingly
            }
        });


        //check/uncheck all messages
        $('#id-toggle-all').removeAttr('checked').on('click', function(){
            if(this.checked) {
                Inbox.select_all();
            } else Inbox.select_none();
        });

        //select all
        $('#id-select-message-all').on('click', function(e) {
            e.preventDefault();
            Inbox.select_all();
        });

        //select none
        $('#id-select-message-none').on('click', function(e) {
            e.preventDefault();
            Inbox.select_none();
        });

        //select read
        $('#id-select-message-read').on('click', function(e) {
            e.preventDefault();
            Inbox.select_read();
        });

        //select unread
        $('#id-select-message-unread').on('click', function(e) {
            e.preventDefault();
            Inbox.select_unread();
        });

        /////////

        //display first message in a new area
        $('.message-list .message-item:eq(0) .text').on('click', function() {
            //show the loading icon
            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');

            $('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();

            var message_list = $(this).closest('.message-list');

            $('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
            //some waiting
            setTimeout(function() {

                //hide everything that is after .message-list (which is either .message-content or .message-form)
                message_list.next().addClass('hide');
                $('.message-container').find('.message-loading-overlay').remove();

                //close and remove the inline opened message if any!

                //hide all navbars
                $('.message-navbar').addClass('hide');
                //now show the navbar for single message item
                $('#id-message-item-navbar').removeClass('hide');

                //hide all footers
                $('.message-footer').addClass('hide');
                //now show the alternative footer
                $('.message-footer-style2').removeClass('hide');


                //move .message-content next to .message-list and hide .message-list
                $('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));

                //add scrollbars to .message-body
                $('.message-content .message-body').ace_scroll({
                    size: 150,
                    mouseWheelLock: true,
                    styleClass: 'scroll-visible'
                });

            }, 500 + parseInt(Math.random() * 500));
        });


        //display second message right inside the message list
        $('.message-list .message-item:eq(1) .text').on('click', function(){
            var message = $(this).closest('.message-item');

            //if message is open, then close it
            if(message.hasClass('message-inline-open')) {
                message.removeClass('message-inline-open').find('.message-content').remove();
                return;
            }

            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
            setTimeout(function() {
                $('.message-container').find('.message-loading-overlay').remove();
                message
                        .addClass('message-inline-open')
                        .append('<div class="message-content" />')
                var content = message.find('.message-content:last').html( $('#id-message-content').html() );

                //remove scrollbar elements
                content.find('.scroll-track').remove();
                content.find('.scroll-content').children().unwrap();

                content.find('.message-body').ace_scroll({
                    size: 150,
                    mouseWheelLock: true,
                    styleClass: 'scroll-visible'
                });

            }, 500 + parseInt(Math.random() * 500));

        });



        //back to message list
        $('.btn-back-message-list').on('click', function(e) {

            e.preventDefault();
            $('#inbox-tabs a[href="#inbox"]').tab('show');
        });



        //hide message list and display new message form
        /**
         $('.btn-new-mail').on('click', function(e){
					e.preventDefault();
					Inbox.show_form();
				});
         */




        var Inbox = {
            //displays a toolbar according to the number of selected messages
            display_bar : function (count) {
                if(count == 0) {
                    $('#id-toggle-all').removeAttr('checked');
                    $('#id-message-list-navbar .message-toolbar').addClass('hide');
                    $('#id-message-list-navbar .message-infobar').removeClass('hide');
                }
                else {
                    $('#id-message-list-navbar .message-infobar').addClass('hide');
                    $('#id-message-list-navbar .message-toolbar').removeClass('hide');
                }
            }
            ,
            select_all : function() {
                var count = 0;
                $('.message-item input[type=checkbox]').each(function(){
                    this.checked = true;
                    $(this).closest('.message-item').addClass('selected');
                    count++;
                });

                $('#id-toggle-all').get(0).checked = true;

                Inbox.display_bar(count);
            }
            ,
            select_none : function() {
                $('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
                $('#id-toggle-all').get(0).checked = false;

                Inbox.display_bar(0);
            }
            ,
            select_read : function() {
                $('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

                var count = 0;
                $('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
                    this.checked = true;
                    $(this).closest('.message-item').addClass('selected');
                    count++;
                });
                Inbox.display_bar(count);
            }
            ,
            select_unread : function() {
                $('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');

                var count = 0;
                $('.message-unread input[type=checkbox]').each(function(){
                    this.checked = true;
                    $(this).closest('.message-item').addClass('selected');
                    count++;
                });

                Inbox.display_bar(count);
            }
        }

        //show message list (back from writing mail or reading a message)
        Inbox.show_list = function() {
            $('.message-navbar').addClass('hide');
            $('#id-message-list-navbar').removeClass('hide');

            $('.message-footer').addClass('hide');
            $('.message-footer:not(.message-footer-style2)').removeClass('hide');

            $('.message-list').removeClass('hide').next().addClass('hide');
            //hide the message item / new message window and go back to list
        }

        //show write mail form
        Inbox.show_form = function() {
            if($('.message-form').is(':visible')) return;
            if(!form_initialized) {
                initialize_form();
            }


            var message = $('.message-list');
            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');

            setTimeout(function() {
                message.next().addClass('hide');

                $('.message-container').find('.message-loading-overlay').remove();

                $('.message-list').addClass('hide');
                $('.message-footer').addClass('hide');
                $('.message-form').removeClass('hide').insertAfter('.message-list');

                $('.message-navbar').addClass('hide');
                $('#id-message-new-navbar').removeClass('hide');


                //reset form??
                $('.message-form .wysiwyg-editor').empty();

                $('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
                $('.message-form input[type=file]').ace_file_input('reset_input');

                $('.message-form').get(0).reset();

            }, 300 + parseInt(Math.random() * 300));
        }




        var form_initialized = false;
        function initialize_form() {
            if(form_initialized) return;
            form_initialized = true;

            //intialize wysiwyg editor
            $('.message-form .wysiwyg-editor').ace_wysiwyg({
                toolbar:
                        [
                            'bold',
                            'italic',
                            'strikethrough',
                            'underline',
                            null,
                            {name:'insertunorderedlist', className:'btn-success'},
                            {name:'insertorderedlist', className:'btn-success'},
                            null,
                            'justifyleft',
                            'justifycenter',
                            'justifyright',
                            null,
                            'createLink',
                            'unlink',
                            null,
                            'foreColor',
                            null,
                            'undo',
                            'redo'
                        ]
            }).prev().addClass('wysiwyg-style1');



            //file input
            $('.message-form input[type=file]').ace_file_input()
                    .closest('.ace-file-input')
                    .addClass('width-90 inline')
                    .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');

            //Add Attachment
            //the button to add a new file input
            $('#id-add-attachment')
                    .on('click', function(){
                        var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
                        file.ace_file_input();

                        file.closest('.ace-file-input')
                                .addClass('width-90 inline')
                                .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
                                .parent().append('<div class="action-buttons pull-right col-xs-1">\
							<a href="#" data-action="delete" class="middle">\
								<i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
							</a>\
						</div>')
                                .find('a[data-action=delete]').on('click', function(e){
                            //the button that removes the newly inserted file input
                            e.preventDefault();
                            $(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
                        });
                    });
        }//initialize_form

        //turn the recipient field into a tag input field!
        /**
         var tag_input = $('#form-field-recipient');
         try {
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				} catch(e) {}


         //and add form reset functionality
         $('#id-message-form').on('reset', function(){
					$('.message-form .message-body').empty();

					$('.message-form .ace-file-input:not(:first-child)').remove();
					$('.message-form input[type=file]').ace_file_input('reset_input_ui');

					var val = tag_input.data('value');
					tag_input.parent().find('.tag').remove();
					$(val.split(',')).each(function(k,v){
						tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
					});
				});
         */

    });
</script>

<script type="text/javascript">
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable( {
                            bAutoWidth: false,
                            "aoColumns": [
                                { "bSortable": false },
                                null, null,null,
                                { "bSortable": false }
                            ],
                            "aaSorting": [],


                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        } );



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons( myTable, {
            buttons: [
                {
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                }
            ]
        } );
        myTable.buttons().container().appendTo( $('.tableTools-container') );

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function() {
            $($('.tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);





        myTable.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
            }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
            }
        } );




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
            var row = $(this).closest('tr').get(0);
            if(this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if($row.is('.detail-row ')) return;
            if(this.checked) $row.addClass(active_class);
            else $row.removeClass(active_class);
        });



        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }




        /***************/
        $('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/





        /**
         //add horizontal scrollbars to a simple table
         $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
         {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
         ).css('padding-top', '12px');
         */


    })
</script>
<script>
    $(function () {
        CKEDITOR.replace('editorposting');
    });
</script>
</body>
</html>
