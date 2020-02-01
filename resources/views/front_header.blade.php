<!-- toggle top area -->
<div class="hidden-top">
    <div class="hidden-top-inner container">
        <div class="row">
            <div class="span12">
                <ul>
                    <li><strong>We are available for any custom works this month</strong></li>
                    <li>Main office: Springville center X264, Park Ave S.01</li>
                    <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end toggle top area -->
<!-- start header -->
<header>
    <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
            <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
            <div class="span12">
                <div class="headnav">
                    <ul>
                        <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Student Login</a></li>
                        <li><a href="#mySignin" data-toggle="modal"><i class="fas fa-radiation-alt"></i> &nbsp; Admin Login</a></li>
                    </ul>
                </div>
                <!-- Signup Modal -->
                <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                    </div>
                    <div class="modal-body text-center">
                        <form method="post" action="{{ url('/student-dashboard') }}">
                            {{ csrf_field() }}
                            <div class="form-group form-control">
                                <label>Username or email *</label>
                                <input type="text" class="form-control p_input" name="student_email">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="text" class="form-control p_input" name="student_password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="icheck-square">
                                    <input tabindex="1" type="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary enter-btn">Login</button>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="{{url('/redirect')}}" class="btn btn-success">
                                    <i class="fab fa-facebook-f"></i>
                                    Facebook</a>
                                &nbsp;
                                <a href="#" class="google-login btn btn-google">
                                    <i class="fab fa-github"></i>
                                    Github</a>
                            </div>
                            <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
                        </form>
                    </div>
                </div>
                <!-- end signup modal -->
                <!-- Sign in Modal -->
                <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                    </div>
                    <div class="modal-body text-center">
                        <form method="post" action="{{ url('/dashboard') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Username or email *</label>
                                <input type="text" class="form-control p_input" name="email" id="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="text" class="form-control p_input" name="password" id="password" placeholder="password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="icheck-square">
                                    <input tabindex="1" type="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                            <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
                        </form>
                    </div>
                </div>
                <!-- end signin modal -->
                <!-- Reset Modal -->
                <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputResetEmail">Email</label>
                                <div class="controls">
                                    <input type="text" id="inputResetEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Reset password</button>
                                </div>
                                <p class="aligncenter margintop20">
                                    We will send instructions on how to reset your password to your inbox
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end reset modal -->
            </div>
        </div>
        <div class="row">
            <div class="span4">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('public/images/backend_img/logo.png') }}" alt="" class="logo" /></a>
                    <h1>Full Stack Developer</h1>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="dropdown active">
                                    <a href="{{ url('/') }}">Home </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Features <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="table.html">Table</a></li>
                                        <li><a href="components.html">Components</a></li>
                                        <li><a href="animations.html">56 Animations</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="icon-variations.html">Icon variations</a></li>
                                        <li class="dropdown"><a href="#">3 Sliders <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu sub-menu-level1">
                                                <li><a href="index.html">Nivo slider</a></li>
                                                <li><a href="index-alt2.html">Slit slider</a></li>
                                                <li><a href="index-alt3.html">Parallax slider</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Portfolio <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('/contact') }}">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->