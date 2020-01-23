
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $setting->student_name }}</title>
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
                        <img style="width: 80px;height: 100px" src="{{ url($setting->student_image) }}" alt="">
                        <p>{{ $setting->student_name }}</p>
                    </div>
                </div>
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('viewProfile') }}">
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

                <h1 class="page-title">Update Student</h1>
                <p class="alert-danger">
                    <?php
                    $exception=Session::put('exception');
                    if ($exception){
                        echo $exception;
                        Session::put('exception',null);
                    }
                    ?>
                </p>
                <div class="row">
                    <div class="col-12 col-lg-6 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <form class="forms-sample" method="post" action="{{ URL::to('/update',$setting->student_id) }}"> {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Student Phone</label>
                                        <input type="number" class="form-control p-input" name="student_phone"
                                               value="{{$setting->student_phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Student Address</label>
                                        <input type="text" class="form-control p-input" name="student_address"
                                               value="{{$setting->student_address}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Student Password</label>
                                        <input type="password" class="form-control p-input" name="student_password"
                                               value="{{$setting->student_password}}">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Update</button>
                                </form>
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
