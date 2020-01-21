<!DOCTYPE html>
<html>

<!-- Mirrored from html.codedthemes.com/guru-able/dark-light/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 13:00:49 GMT -->

<head>
    <title>{{ trans('panel.site_title') }}</title>

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="{{asset('assets/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/pages/flag-icon/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/pages/menu-search/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/sweetalert/css/sweetalert.css')}}" />
    {{-- dataTables --}}
    <link rel="stylesheet" href="{{asset('bower_components/datatables/datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bower_components/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bower_components/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('bower_components/datatables/Select-1.3.1/css/select.dataTables.min.css')}}" />
    
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{asset('bower_components/select2/css/select2.min.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="{{asset('bower_components/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet" />
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index-2.html">
                            <img class="img-fluid" src="{{asset('assets/files/assets/images/logo.png')}}" alt="{{ trans('panel.site_title') }}" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a class="main-search morphsearch-search" href="#">

                                    <i class="ti-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            {{-- //mega menu --}}
                            {{-- @include('partials.mega') --}}
                        </ul>
                        <ul class="nav-right">
                            {{-- //internacional --}}
                            {{-- @include('partials.lang') --}}

                            {{-- notificacoes --}}
                            @include('partials.header-notifications')

                            {{-- call to chat --}}
                            {{-- <li class="header-notification">
                                <a href="#!" class="displayChatbox">
                                    <i class="ti-comments"></i>
                                    <span class="badge bg-c-green"></span>
                                </a>
                            </li> --}}
                            
                            {{-- //profile topbar --}}
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{asset('assets/files/assets/images/avatar-4.jpg')}}" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"
                                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                            <i class="ti-layout-sidebar-left"></i> {{ trans('global.logout') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        {{-- search top --}}
                        @include('partials.search')

                    </div>
                </div>
            </nav>

            {{-- @include('partials.chat') --}}


            {{-- sidebar menu --}}
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('partials.menu')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                @yield('content') 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{asset('assets/files/assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{asset('assets/files/assets/images/browser/firefox.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{asset('assets/files/assets/images/browser/opera.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{asset('assets/files/assets/images/browser/safari.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{asset('assets/files/assets/images/browser/ie.png')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

    {{-- essentials --}}
    <script src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('bower_components/popper.js/js/popper.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
    <script src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>
        
    <script src="{{asset('assets/files/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/files/assets/js/demo-dark-light.js')}}"></script>
    <script src="{{asset('assets/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="{{asset('bower_components/moment/js/moment.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>    
    <script src="{{asset('bower_components/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('bower_components/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
    
    {{-- datatables --}}
    <script src="{{asset('bower_components/datatables/DataTables-1.10.20/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Buttons-1.6.1/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Buttons-1.6.1/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Buttons-1.6.1/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Buttons-1.6.1/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script src="{{asset('bower_components/datatables/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables/Select-1.3.1/js/dataTables.select.min.js')}}"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    {{-- custom --}}
    <script src="{{asset('assets/files/assets/js/script.js')}}"></script>
    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
                'pt-BR': 'https:////cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
            $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['pt-BR']
                // url: languages['{{ app()->getLocale() }}']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
                style:    'multi+shift',
                selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
                {
                    extend: 'copy',
                    className: 'btn-default btn-xs',
                    text: copyButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-default btn-xs',
                    text: csvButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-default btn-xs',
                    text: excelButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-default btn-xs',
                    text: pdfButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-default btn-xs',
                    text: printButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-default btn-xs',
                    text: colvisButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });

    </script>
    
    @yield('scripts')
</body>

</html>
