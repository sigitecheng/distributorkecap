@include('be_dashboard.halamanutama.header')
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-fuchsia-700 text-white p-4 font-bold">
                Dashboard                    {{-- <span class="small">admin</span></a></h3> --}}
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/img/profile.jpg" alt="Adam" class="rounded-circle" width="40px" height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Jonathan Clarke</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child"><a href="index3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child"><a href="index4.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="parent">
                                <a href="widgets.html" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">Widget </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><i class="fa fa-puzzle-piece mr-3"></i>
                                    <span class="none">UI Elements <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ul_element">
                                    <li class="child"><a href="accordion.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Accordions</a></li>
                                    <li class="child"><a href="buttons.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Buttons</a></li>
                                    <li class="child"><a href="badges.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Badges</a></li>
                                    <li class="child"><a href="breadcrumb.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Breadcrumbs</a></li>
                                    <li class="child"><a href="cards.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cards</a></li>
                                    <li class="child"><a href="icons.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Icons</a></li>
                                    <li class="child"><a href="modal.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Modals</a></li>
                                    <li class="child"><a href="notification.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Notification</a></li>
                                    <li class="child"><a href="progressbar.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Progressbar</a></li>
                                    <li class="child"><a href="sweetalert.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sweet alert</a></li>
                                    <li class="child"><a href="tabs.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Tabs</a></li>
                                    <li class="child"><a href="tooltip-popover.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Tooltip and Popovers</a></li>
                                    <li class="child"><a href="typography.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Typography</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Form Elements <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="form_element">
                                    <li class="child"><a href="form-general.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Elements</a></li>
                                    <li class="child"><a href="form-advanced.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Advanced Elements</a></li>
                                    <li class="child"><a href="form-validation.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Validation</a></li>
                                    <li class="child"><a href="form-wizard.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i class="fa fa-pencil-square-o mr-3"></i>
                                    <span class="none">Text Editors <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="ckeditor-classic.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor classic</a></li>
                                    <li class="child"><a href="ckeditor-inline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor inline</a></li>
                                    <li class="child"><a href="ckeditor-document.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ckeditor document</a></li>
                                    <li class="child"><a href="summernote.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Summernote editor</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Tables <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables">
                                    <li class="child"><a href="basic-tables.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Tables</a></li>
                                    <li class="child"><a href="datatable.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Datatables</a></li>
                                    <li class="child"><a href="jsgrid-table.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> JSGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-3"></i>
                                    <span class="none">Charts <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child"><a href="chart.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chart JS</a></li>
                                    <li class="child"><a href="chartist.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chartist JS</a></li>
                                    <li class="child"><a href="echarts.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Echarts JS</a></li>
                                    <li class="child"><a href="flot.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Flot JS</a></li>
                                    <li class="child"><a href="morris.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Morris JS</a></li>
                                    <li class="child"><a href="nvd3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> NVD3 JS</a></li>
                                    <li class="child"><a href="sparkline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sparkline JS</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="icons.html" class=""><i class="fa fa-toggle-on mr-3"></i>
                                    <span class="none">Icons</span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i class="fa fa-shopping-cart mr-3"></i>
                                    <span class="none">Ecommerce <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ecommerce">
                                    <li class="child"><a href="products.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductList</a></li>
                                    <li class="child"><a href="product-detail.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductDetail</a></li>
                                    <li class="child"><a href="orders.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> OrderList</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('maps'); return false" class=""><i class="fa fa-map mr-3"></i>
                                    <span class="none">Maps <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="maps">
                                    <li class="child"><a href="jvector-maps.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Jvector Maps</a></li>
                                    <li class="child"><a href="google-maps.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Google Maps</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('pages'); return false" class=""><i class="fa fa-file mr-3"></i>
                                    <span class="none">Pages <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="pages">
                                    <li class="child"><a href="email-inbox.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Inbox</a></li>
                                    <li class="child"><a href="email.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Compose</a></li>
                                    <li class="child"><a href="login.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Login</a></li>
                                    <li class="child"><a href="register.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Signup</a></li>
                                    <li class="child"><a href="lockscreen.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Lock Screen</a></li>
                                    <li class="child"><a href="forgot-password.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Forgot Password</a></li>
                                    <li class="child"><a href="profile.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Profile</a></li>
                                    <li class="child"><a href="gallery.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Gallery</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                    <li class="child"><a href="search-result.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Search</a></li>
                                    <li class="child"><a href="pricing.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Pricing</a></li>
                                    <li class="child"><a href="blank.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Blank Page</a></li>
                                    <li class="child"><a href="error-404.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 404</a></li>
                                    <li class="child"><a href="error-500.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 500</a></li>
                                    <li class="child"><a href="error-504.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 504</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="fullcalendar.html" class=""><i class="fa fa-calendar-o mr-3"> </i>
                                    <span class="none">Full Calendar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-3" ><strong>Dashboard</strong></h5>
                
                <div class="row mt-1">
                    <div class="col-sm-8 col-md-8">
                        <!--Analytics-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Revenue Analytics</h6>
                            
                            <canvas id="revenueChart" height="300px"></canvas>
                            
                        </div>
                        <!--/Analytics-->

                    </div>

                    <div class="col-sm-4 col-md-4">
                        <!--Analytics-->
                        <div class="bg-white border shadow mb-4">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-globe text-theme"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>1,215,509</strong></h3>
                                    <p><small class="bc-description text-theme">TOTAL VISITORS</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border shadow mb-4">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-heart-o text-danger"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>83,509</strong></h3>
                                    <p><small class="bc-description text-danger">MENTIONS</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border shadow">
                            <div class="media p-4">
                                <div class="align-self-center mr-3 rounded-circle notify-icon_2 bg-white">
                                    <i class="fa fa-lightbulb text-success"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="mt-0 mb-0"><strong>2,500</strong></h3>
                                    <p><small class="text-success bc-description">PROJECTS</small></p>
                                </div>
                            </div>
                        </div>
                        <!--/Analytics-->

                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-sm-6 col-md-4">
                        <!--Browser usage-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Browser usage</h6><hr>

                            <div id="radarChartEcharts"  style="height: 300px; width: 100%"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <!--Store summary-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Store summary</h6><hr>

                            <div id="donutChartEcharts" style="height: 300px; width: 100%"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <!--Profile card-->
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/home-right-admin-img.png" width="80px" height="80px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Rasheed Rayhan</strong></h6>
                                        <p class="mb-3 text-info"><strong>Web designer</strong></p>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Follow
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-4 mb-4">
                                    <div class="row user-about">
                                        <div class="col-sm-4 col-4 border-right">
                                            <h4>20</h4>
                                            <p>Photos</p>
                                        </div>
                                        <div class="col-sm-4 col-4">
                                            <h4>31</h4>
                                            <p>Videos</p>
                                        </div>
                                        <div class="col-sm-4 col-4 border-left">
                                            <h4>120</h4>
                                            <p>Tasks</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <p class="mb-3 mt-3 text-center p-space">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do 
                                </p>

                                <div class="flex-social mt-4 mb-3">
                                    <a href=""><i class="fa fa-facebook-square"></i></a>
                                    <a href=""><i class="fa fa-google-plus-square"></i></a>
                                    <a href=""><i class="fa fa-spotify"></i></a>
                                    <a href=""><i class="fa fa-yahoo-square"></i></a>
                                    <a href=""><i class="fa fa-twitter-square"></i></a>
                                    <a href=""><i class="fa fa-linkedin-square"></i></a>
                                    <a href=""><i class="fa fa-pinterest-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Realtime-->
                <div class="mt-3 row">
                    <div class="col-sm-12">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Realtime Updates</h6><hr>
                            
                            <div class="row mb-3">
                                <div class="col-sm-6 ol-12">
                                    <h5>Current sales</h5>
                                    <h1 class="text-theme">356</h1>
                                </div>
                                <div class="col-sm-6 ol-12 text-right">
                                    <h5>Revenue</h5>
                                    <h1 class="text-danger">$5545</h1>
                                </div>
                            </div>

                            <div id="realtimeDashboard" style="width: 100%; height:150px; overflow-x: auto"></div>
                        </div>
                    </div>
                </div>
                <!--/Realtime-->

                <!--Products summary-->
                <div class="mt-4 mb-4 bg-white border shadow lh-sm">
                    <!--Recent Sales-->
                    <div class="product-list">
                        
                        <div class="row mb-0 px-3 pt-3">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Recent Sales</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <div class="pull-right mr-3 btn-order-bulk">
                                    <button class="btn btn-theme btn-round">View all</button>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table mt-0" id="productList">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customer</th>
                                        <th>Categories</th>
                                        <th>Popularity</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">IphoneX</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+8</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="85" style="width: 85%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 4,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">One Plus</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" style="width: 55%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 650</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Samsumg S7</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img2.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+5</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Techno</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img3.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img4.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Sony Xperia</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+4</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" style="width: 60%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 3,500</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">HTC</td>
                                        <td class="align-middle">
                                            <div class="customers">
                                                <span class="customer-circle" style="background-image: url('assets/img/profile.jpg')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/client-img5.png')"></span>
                                                <span class="customer-circle" style="background-image: url('assets/img/jd-150.png')"></span>
                                                <span class="customer-circle end text-light text-center pt-2">+18</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn-outline-theme btn-round">
                                                mobile
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$ 1,200</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <!--/Recent sales-->
                </div>
                <!--Product summary-->

        @include('be_dashboard.halamanutama.footer')