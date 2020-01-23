
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $student_profile->student_name }}</title>
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
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <div class="details">
                        <img style="width: 80px;height: 100px" src="{{ url($student_profile->student_image) }}" alt="">
                        <p>{{ $student_profile->student_name }}</p>
                    </div>
                </div>
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/setting') }}">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">Setting</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/logout') }}">
                            <i class="mdi mdi-puzzle menu-icon"></i>
                            <span class="menu-title">LogOut</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">

                <h1 class="page-title">Student Profile</h1>
                <div class="row user-profile">
                    <div class="col-lg-6 side-left">
                        <div class="card mb-4">
                            <div class="card-body avatar">
                                <h3 class="text-center" style="font-weight: bolder;font-family: cursive">Institute Of Science & Technology</h3>
                                <img src="{{ url($student_profile->student_image) }}" alt="">
                                <p class="name">{{ $student_profile->student_name }}</p>
                                <p class="designation">{{ $student_profile->student_department }}</p>
                                <a class="email" href="#">{{ $student_profile->student_phone }}</a>
                                <a class="number" href="#">{{ $student_profile->student_email }}</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body overview">
                                <ul class="achivements">
                                    <li><p>34</p><p>Projects</p></li>
                                    <li><p>23</p><p>Task</p></li>
                                    <li><p>29</p><p>Completed</p></li>
                                </ul>
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">About</h2>
                                    <p>Student full Information below:</p>
                                </div>
                                <div class="info-links">
                                    <a class="website">
                                        <i class="icon-globe icon"> Roll No:</i>
                                        <span>{{ $student_profile->student_roll }}</span>
                                    </a>
                                    <a class="website">
                                        <i class="icon-globe icon">Department:</i>
                                        <span>{{ $student_profile->student_department }}</span>
                                        {{--                            <span>{{ convert_department($studentDetails->student_department) }}</span>--}}
                                    </a>
                                    <a class="website">
                                        <i class="icon-globe icon">Father's Name:</i>
                                        <span>{{ $student_profile->student_fathername }}</span>
                                    </a>
                                    <a class="website">
                                        <i class="icon-globe icon">Mother's Name:</i>
                                        <span>{{ $student_profile->student_mothername }}</span>
                                    </a>
                                    <a class="website">
                                        <i class="icon-globe icon">Address:</i>
                                        <span>{{ $student_profile->student_address }}</span>
                                    </a>
                                    <a class="website">
                                        <i class="icon-globe icon">Admission Year:</i>
                                        <span>{{ $student_profile->student_year }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->

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
