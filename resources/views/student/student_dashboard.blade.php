
@php
$student_id=Session::get('student_id');
$student_info=DB::table('students')->where('student_id',$student_id)
->first();

@endphp

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('node_modules/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('node_modules/rickshaw/rickshaw.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/chartist/dist/chartist.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/backend_css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/backend_img/favicon.html') }}" />
</head>
<body class="sidebar-dark">
<!-- partial:partials/_settings-panel.html -->
<div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
            <div class="color-tiles">
                <div class="tiles primary" id="primary-theme"></div>
                <div class="tiles success" id="success-theme"></div>
                <div class="tiles warning" id="warning-theme"></div>
                <div class="tiles danger" id="danger-theme"></div>
                <div class="tiles pink" id="pink-theme"></div>
                <div class="tiles info" id="info-theme"></div>
                <div class="tiles dark" id="dark-theme"></div>
                <div class="tiles light" id="light-theme"></div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sidebar Mode
                </button>
                <div class="dropdown-menu" aria-labelledby="sidebar-color">
                    <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
                    <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
                </div>
            </div>
            <div class="dropdown d-none d-md-block">
                <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layouts
                </button>
                <div class="dropdown-menu" aria-labelledby="Layouts-type">
                    <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
                    <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
                    <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
                    <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
                    <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
                </div>
            </div>
        </div>
        <!-- layout section tabends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
                <li class="list">
                    <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- chat section tabends -->
    </div>
</div>
<!-- partial -->
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="{{ url('/student-dashboard') }}"><img style="width: 60px;" src="{{ asset('images/backend_img/logo.png') }}" alt="Logo">
                Kamal Hossen</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="btn-group d-none d-sm-block">
                <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
                <div class="input-group solid">
                    <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <div class="profile">
                        <img src="{{$student_info->student_image}}" alt="">
                    </div>
                    <div class="details">
                        <p class="user-name">{{strtoupper($student_info->student_name)}}</p>
                        <p class="designation">Developer</p>
                    </div>
                </div>
                <ul class="nav">
                    <!--main pages start-->
                    <li class="nav-item nav-category">
                        <span class="nav-link">Main</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/profile') }}">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/setting') }}">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">Setting</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/logout') }}">
                            <i class="mdi mdi-gauge menu-icon"></i>
                            <span class="menu-title">LogOut</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="row" style="font-family: cursive;text-align: center">
                    <div class="col-sm-6 col-md-3 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">All Student's</h2>
                                @php
                                    $student=DB::table('students')->count('student_id');
                                @endphp
                                <h2>
                                    {{$student}}
                                </h2>
                            </div>
                            <div class="dashboard-chart-card-container">
                                <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">All Teacher's</h2>
                                @php
                                    $teacher=DB::table('teachers')->count('id');
                                @endphp
                                <h2>{{$teacher}}</h2>
                            </div>
                            <div class="dashboard-chart-card-container">
                                <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Tution Fee</h2>
                                <h4><b>3000Tk Monthly</b></h4>
                            </div>
                            <div class="dashboard-chart-card-container">
                                <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Revenue</h2>
                                <h2 class="card-title">Revenue</h2>
                            </div>
                            <div class="dashboard-chart-card-container">
                                <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Full Stack Developer</a> &copy; 2020
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('node_modules/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('node_modules/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('node_modules/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('node_modules/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('node_modules/rickshaw/vendor/d3.v3.js') }}"></script>
<script src="{{ asset('node_modules/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('bower_components/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('node_modules/chartist-plugin-legend/chartist-plugin-legend.js') }}"></script>
<script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('js/backend_js/off-canvas.js') }}"></script>
<script src="{{ asset('js/backend_js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/backend_js/misc.js') }}"></script>
<script src="{{ asset('js/backend_js/settings.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('js/backend_js/dashboard_1.js') }}"></script>
<!-- End custom js for this page-->
<!-- plugins:js -->
<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<!-- Plugin js for this page-->
<script src="{{ asset('node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/backend_js/data-table.js') }}"></script>

</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
