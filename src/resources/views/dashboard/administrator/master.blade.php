<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% { -webkit-transform: scale(0) }
            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            } 100% {
                  -webkit-transform: scale(1.0);
                  transform: scale(1.0);
                  opacity: 0;
              }
        }
    </style>
</head>
<body class="app">

    @include('dashboard.blocks.loader')

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
        <!-- #Left Sidebar ==================== -->
        <div class="sidebar">
            <div class="sidebar-inner">
                <!-- ### $Sidebar Header ### -->
            @include('dashboard.blocks.logo', [
                'link' => "index.html",
                'imagePath' => asset('images/dashboard/logo.png'),
                'name' => 'Admin'
            ])

            <!-- ### $Sidebar Menu ### -->
                <ul class="sidebar-menu scrollable pos-r pT-20">
                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => "active",
                        'link' => route('dashboard.index'),
                        'color' => 'c-blue-500',
                        'icon' => 'ti-home',
                        'name' => 'Dashboard'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => '',
                        'link' => route('dashboard.email'),
                        'color' => 'c-brown-500',
                        'icon' => 'ti-email',
                        'name' => 'Email'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => '',
                        'link' => route('dashboard.compose'),
                        'color' => 'c-blue-500',
                        'icon' => 'ti-share',
                        'name' => 'Compose'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => '',
                        'link' => route('dashboard.calendar'),
                        'color' => 'c-deep-orange-500',
                        'icon' => 'ti-calendar',
                        'name' => 'Calendar'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                       'className' => '',
                       'link' => route('dashboard.chat'),
                       'color' => 'c-deep-purple-500',
                       'icon' => 'ti-comment-alt',
                       'name' => 'Chat'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                       'className' => '',
                       'link' => route('dashboard.charts'),
                       'color' => 'c-indigo-500',
                       'icon' => 'ti-bar-chart',
                       'name' => 'Charts'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => '',
                        'link' => route('dashboard.forms'),
                        'color' => 'c-light-blue-500',
                        'icon' => 'ti-pencil',
                        'name' => 'Forms'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-item', [
                        'className' => '',
                        'link' => route('dashboard.uielements'),
                        'color' => 'c-pink-500',
                        'icon' => 'ti-palette',
                        'name' => 'UI Elements'
                    ]) @endcomponent

                    @component('dashboard.blocks.sidebar.nav-dropdown', [
                        'color' => 'c-orange-500',
                        'icon' => 'ti-layout-list-thumb',
                        'name' => 'Tables',
                        'children' => [
                            'names' => [
                                'Basic Table',
                                'Data Table'
                            ],
                            'links' => [
                                route('dashboard.basicTables'),
                                route('dashboard.datatable')
                            ]
                        ]
                    ]) @endcomponent


                    @component('dashboard.blocks.sidebar.nav-dropdown', [
                        'color' => 'c-red-500',
                        'icon' => 'ti-files',
                        'name' => 'Pages',
                        'children' => [
                            'names' => [
                                '404',
                                '500',
                                'Sign In',
                                'Sign Up'
                            ],
                            'links' => [
                                route('dashboard.pages.404'),
                                route('dashboard.pages.500'),
                                route('dashboard.pages.signin'),
                                route('dashboard.pages.signup')
                            ]
                        ]
                    ]) @endcomponent


                    @component('dashboard.blocks.sidebar.nav-dropdown', [
                        'color' => 'c-teal-500',
                        'icon' => 'ti-view-list-alt',
                        'name' => 'Multiple Level',
                        'children' => [
                            'names' => [
                                'Menu Item'
                            ],
                            'links' => [
                                "javascript:void(0);"
                            ]
                        ],
                        'grandchildren' => [
                            'parentName' => 'Child Item',
                            'names' => [
                                'Grand Children #1',
                                'Grand Children #2'
                            ],
                            'links' => [
                                '',
                                ''
                            ]
                        ]
                    ]) @endcomponent

                </ul>

            </div>
        </div>

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li>
                            <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li class="search-box">
                            <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                                <i class="search-icon ti-search pdd-right-10"></i>
                                <i class="search-icon-close ti-close pdd-right-10"></i>
                            </a>
                        </li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Search...">
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="notifications dropdown">
                            <span class="counter bgc-red">3</span>
                            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="pX-20 pY-15 bdB">
                                    <i class="ti-bell pR-10"></i>
                                    <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                                </li>
                                <li>
                                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">John Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">post</span>
                              </span>
                            </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">5 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600">liked your <span class="text-dark">cover image</span>
                              </span>
                            </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">7 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                            <span>
                              <span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600">commented on your <span class="text-dark">video</span>
                              </span>
                            </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">10 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a>
                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications dropdown">
                            <span class="counter bgc-blue">3</span>
                            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                                <i class="ti-email"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="pX-20 pY-15 bdB">
                                    <i class="ti-email pR-10"></i>
                                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                                </li>
                                <li>
                                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">John Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">5 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">Moo Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">15 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">Lee Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">25 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                Want to create your own customized data generator for your app...
                              </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                      <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10">
                                    <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                                </div>
                                <div class="peer">
                                    <span class="fsz-sm c-grey-900">John Doe</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-settings mR-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-user mR-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-email mR-10"></i>
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-power-off mR-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>

                    @yield('content')

                </div>
            </main>

            @include('dashboard.blocks.footer')
        </div>
    </div>

<script src="{{asset('js/dashboard.js')}}"></script>
@stack('scripts')
</body>
</html>
