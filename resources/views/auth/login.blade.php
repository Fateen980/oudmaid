<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>Maids</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"        type="text/css">    
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}"  type="text/css">  
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}"  type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons.css') }}" > 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('extras/animate.css') }}"  type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('extras/owl.theme.css') }}"  type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{ asset('extras/settings.css') }}"  type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}"  type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"  type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"  type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/red.css') }}" media="screen" />
    
    
  </head>

  <body>  


      <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a  href="/">
                    Home 
                    </a>
    
                  </li>
                  <li>
                    <a  href="/search">
                    Maid Search 
                    </a>
                  
                  </li>
                  <li>
                    <a  href="/agency">
                    Maid Agency 
                    </a>
                   
                  </li>
                  <li>
                    <a href="/enquiry" >
                    Enquiry 
                    </a>
                        </li>
                  <li>
                    <a href="/">
                    FAQ 
                    </a>
                    
                  </li>

                  <li>
                  <a href="/news">
                    News 
                    </a>
                    
                  </li>


                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  <li class="left"><a  href="/agencyJoin"><i class="ti-pencil-alt"></i> Maid Agency , Join Us</a></li>
                  <li class="right"><a class="active" href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>
                </ul>
              </div>                           
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="index.html">Home</a>
                <ul>
                  <li><a class="active" href="index.html">Home 1</a></li>
                  <li><a href="index-02.html">Home 2</a></li>
                  <li><a href="index-03.html">Home 3</a></li>
                  <li><a href="index-04.html">Home 4</a></li>
                </ul>                       
              </li>
              <li>
                <a href="about.html">Pages</a>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="job-page.html">Job Page</a></li>
                  <li><a href="job-details.html">Job Details</a></li>
                  <li><a href="resume.html">Resume Page</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="pricing.html">Pricing Tables</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Candidates</a>
                <ul>
                  <li><a href="browse-jobs.html">Browse Jobs</a></li>
                  <li><a href="browse-categories.html">Browse Categories</a></li>
                  <li><a href="add-resume.html">Add Resume</a></li>
                  <li><a href="manage-resumes.html">Manage Resumes</a></li>
                  <li><a href="job-alerts.html">Job Alerts</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Employers</a>
                <ul>
                  <li><a href="post-job.html">Add Job</a></li>
                  <li><a href="manage-jobs.html">Manage Jobs</a></li>
                  <li><a href="manage-applications.html">Manage Applications</a></li>
                  <li><a href="browse-resumes.html">Browse Resumes</a></li>
                </ul>
              </li> 
              <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                  <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                  <li><a href="single-post.html">Blog Single Post</a></li>
                </ul>
              </li>  
              <li class="btn-m"><a href="/agencyJoin"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="btn-m"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <!-- Off Canvas Navigation -->
          <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
          <!--- Off Canvas Side Menu -->
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="ti-close"></i>
            </div>
              

          </div> <!--- End Off Canvas Side Menu -->

      </div>
      <!-- Header Section End -->  


<div id="content">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-4 col-xs-12"></div>
<div class="col-md-9 col-sm-4 col-xs-12">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-3 col-sm-4 col-xs-12"></div>
<div class="col-md-9 col-sm-4 col-xs-12">



<ul class="lest item">
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>
<li>&nbsp</li>


</ul>
</div>

</div>
</div>
</div>
</div>
    <!-- Main JS  -->
    <script type="text/javascript" src="{{ asset('js/jquery-min.js') }}"       ></script>      
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"    ></script>    
    <script type="text/javascript" src="{{ asset('js/material.min.js') }}"     ></script>
    <script type="text/javascript" src="{{ asset('js/material-kit.js') }}"     ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"   ></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"  ></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/jasny-bootstrap.min.js') }}"  ></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/form-validator.min.js') }}"   ></script>
    <script type="text/javascript" src="{{ asset('js/contact-form-script.js') }}"  ></script>    
    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"  ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}" ></script>
      
  </body>
</html>
