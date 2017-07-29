<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title> Admin | Panel</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template"/>
        <meta name="keywords" content="admin,dashboard" />
{{--         <meta name="author" content="Steelcoders" /> --}}
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/pace-master/themes/blue/pace-theme-flash.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/uniform/css/uniform.default.min.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/bootstrap/css/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/fontawesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/line-icons/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/waves/waves.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/switchery/switchery.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/3d-bold-navigation/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/slidepushmenus/css/component.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/weather-icons-master/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/metrojs/MetroJs.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/metrojs/MetroJs.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/toastr/toastr.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/datatables/css/jquery.datatables.min.css') }}">  --}}
        {{-- <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/datatables/css/jquery.datatables_themeroller.css') }}">  --}}
        <!-- Theme Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/ems/css/modern.css') }}">
        @if (Auth::user()->role->code == 1)
            <link rel="stylesheet" href="{{ asset('vendor/ems/css/themes/red.css') }}">
            @else
            <link rel="stylesheet" href="{{ asset('vendor/ems/css/themes/red.css') }}">
        @endif
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css">
        <link rel="stylesheet" href="{{ asset('vendor/ems/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/3d-bold-navigation/js/modernizr.js') }}">
        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}">

        <link rel="stylesheet" href="{{ asset('vendor/ems/plugins/colorpicker/bootstrap-colorpicker.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

        
        <style>
        .has-error .control-label,
        .has-error .help-block,
        .has-error .form-control-feedback {
            color: #EA2C2C !important;
        }
        .has-error .help-text {
            color: #737373 !important;
        }
        .panel-body {
            padding-top: 20px !important;
        }
        </style>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    @php
        $is_compact = config('app.compact_menu');
    @endphp

    <body class="page-header-fixed  @if ($is_compact) compact-menu @endif ">
        <div class="overlay"></div>
     
     {{--    <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="assets/images/avatar1.png" width="52" alt="David Green"/><span>David Green</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div> --}}
{{--         <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form --> --}}
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="{{ route('panel') }}" class="logo-text"><span> {{ config('app.site_name') }} </span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                              {{--   <li>   
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li> --}}
                               {{--  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Christopher Palmer</p>
                                                        <p class="msg-text">See you soon !</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Sandra Smith</p>
                                                        <p class="msg-text">Hey ! I'm working on your project</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">Amily Lee</p>
                                                        <p class="msg-text">Hi David !</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li> --}}
                              {{--   <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                        <p class="task-details">New user registered.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                        <p class="task-details">Database error.</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                        <p class="task-details">Reached 24k likes</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li> --}}
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">
                                        @if (Auth::check())
                                             {{ Auth::user()->name }} {{-- - Rol: {{ Auth::user()->role->name }} --}}
                                        
                                       
                                            <i class="fa fa-angle-down"></i></span>
                                            @if (Auth::user()->image)
                                                <img class="img-circle avatar" src="{{ asset(Auth::user()->image) }}" width="40" height="40" alt="">
                                                @else
                                                <img class="img-circle avatar" src="{{ asset('user-icon.png') }}" width="40" height="40" alt="">
                                            @endif
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        @php
                                            $value = config('app.show_profile');
                                        @endphp
                                        
                                        @if ($value == 1)
                                             <li role="presentation"><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i>Profile</a></li>
                                        @endif

                                       <li role="presentation"><a data-toggle="modal" data-target="#password-modal"> <i class="fa fa-unlock-alt"></i> Cambiar contraseña </a> </li>
                                        {{-- <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li> --}}
                                        {{-- <li role="presentation" class="divider"></li> --}}
                                        {{-- <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li> --}}
                                        <li role="presentation"><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out m-r-xs"></i> Desconectarse </a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                              {{--   <li>
                                    <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </li> --}}
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            @if (Auth::user()->role->code == 1)
                    @include('adminems::sidebar')
                @else
                {{-- expr --}}
            @endif
            
            <!-- Page Sidebar -->
            <div class="page-inner">
                {{-- <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div> --}}
                <div id="main-wrapper">
                    @yield('content')
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2017 &copy; Laravel Admin v1.0.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
       
        <div class="cd-overlay"></div>
        
        @include('adminems::password')
        @include('adminems::modal')
        @include('adminems::delete')
        @include('adminems::success')

        <!-- Javascripts -->
        {{-- <script src="{{ asset('vendor/ems/plugins/jquery/jquery-2.1.3.min.js') }}"></script> --}}
        <script
          src="https://code.jquery.com/jquery-3.2.1.js"
          integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
          crossorigin="anonymous"></script>

        <script src="{{ asset('vendor/ems/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
        <script src="{{ asset('vendor/ems/plugins/pace-master/pace.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/uniform/jquery.uniform.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        {{-- <script src="{{ asset('vendor/ems/plugins/offcanvasmenueffects/js/main.js') }}"></script> --}}
        <script src="{{ asset('vendor/ems/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/jquery-counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/flot/jquery.flot.symbol.min.js') }}"></script>

        <script src="{{ asset('vendor/ems/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/metrojs/MetroJs.min.js') }}"></script>
        
        <script src="{{ asset('vendor/ems/js/modern.js') }}"></script>
        <script src="{{ asset('vendor/ems/js/custom.js') }}"></script>
        <script src="{{ asset('vendor/ems/js/pages/dashboard.js') }}"></script>

        <script src="{{ asset('vendor/ems/plugins/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('vendor/ems/plugins/colorpicker/bootstrap-colorpicker.js') }}"></script>

        <script src="{{ asset('vendor/ems/js/lfm.js') }}"></script>

        <script>
             $('#lfm').filemanager('image');
        </script>
    
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        
        <script>
            setTimeout(function(){
                $('#table').DataTable({
                    language: {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
                    "order": []
                }); 
            }, 100);
            

            $(document).on('click', '.preview-flm' ,function() {
                var nombreImagen = $(this).data('name');
                path = nombreImagen;

                $("#modal-image").find('img').attr('src', path);

                setTimeout(function(){
                  $('#modal-image').show();
                },0);
            });
        </script>



        @yield('scripts')
    </body>
</html>