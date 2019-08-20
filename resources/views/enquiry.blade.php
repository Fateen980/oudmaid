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
        <section id="intro" class="section-fake">
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
                    <a  href="/search" >
                    Maid Search 
                    </a>
                  
                  </li>
                  <li>
                    <a  href="/agency">
                    Maid Agency 
                    </a>
                   
                  </li>
                  <li>
                    <a href="/enquiry" class="active" >
                    Enquiry 
                    </a>
                        </li>
                  <li>
                    <a href="/FAQ">
                    FAQ 
                    </a>
                    
                  </li>

                  <li >
                    <a href="/news" >
                    News 
                    </a>
                    
                  </li>


                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  @guest
                  <li class="left"><a  href="/agencyJoin"><i class="ti-pencil-alt"></i> Maid Agency , Join Us</a></li>
                  <li class="right"><a href="{{ route('login') }}"><i class="ti-lock"></i>  Log In</a></li>
                  @else
                  <li class="left"> <a href="/home"><i class="ti-pencil-alt"></i>Profile</a></li>
                  <li class="right">
                  <li class="right"><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="ti-lock"></i>  Log Out</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                  </form>
                  @endguest
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
<div class="col-md-2 col-sm-4 col-xs-12">

</div>
<div class="col-md-10 col-sm-8 col-xs-12">
<div class="job-alerts-item">
<h3 class="alerts-title">Please leave your contacts and maid requirements, we will match from 2000+ maids for you.</h3>




<div class="alerts-content">
<div class="row">

<div class="col-md-12">
<h3>Your Name</h3>
<div class="form-group is-empty">
<input type="text" class="form-control" placeholder="Your Name">
<span class="material-input"></span></div>
</div>
</div>



<div class="row">

<div class="col-md-12">
<h3>Your E-mail</h3>
<div class="form-group is-empty">
<input type="text" class="form-control" placeholder="mail@example.com">
<span class="material-input"></span></div>
</div>
</div>




<div class="row">

<div class="col-md-12">
<h3>Your Phone</h3>
<div class="form-group is-empty">
<input type="text" class="form-control" placeholder="Your Phone">
<span class="material-input"></span></div>
</div>
</div>



<div class="row">

<div class="col-md-12">
<h3>Your Requirements</h3>
<div class="checkbox">
                <label class="checkbox-inline"><input type="checkbox" value="">No Off-day</label>
 </div>


<div class="checkbox">

<label class="checkbox-inline"><input type="checkbox" value=""> Has child(ren)  </label>
</div>


<div class="checkbox">

<label class="checkbox-inline"><input type="checkbox" value=""> Married  </label>
</div>


</div>
</div>

<div class="row">
                <div class="col-md-2 col-sm-6">
                <h3>Maid Type</h3>
               </div>
                <div class="col-md-10 col-sm-6">
                <div class="radio">
                <label><input type="radio" name="maidType" >New Maid </label>
                <label><input type="radio" name="maidType" >Transfer Maid </label>
                <label><input type="radio" name="maidType" >Ex-Singapore Maid </label>
                </div>
                </div>

</div>

<div class="row">
<div class="col-md-12">
<h3>Nationality</h3>

    <div class="search-category-container">
    <label class="styled-select">
        <select class="dropdown-product selectpicker" name="nationality">
        <option value="-1">No Preference</option>                            
        <option value="1">Filipino</option>
        <option value="2">Indonesian</option>
        <option value="3">Myanmese</option>
        <option value="4">Indian</option>
        <option value="5">Sri Lankan</option>
        <option value="6">Cambodian</option>
        <option value="7">Bangladeshi</option>                              
        </select>
    </label>
    </div>
                   
</div>
</div>




<div class="row">
<div class="col-md-12">
<h3>Primary Duty</h3>

    <div class="search-category-container">
    <label class="styled-select">
        <select class="dropdown-product selectpicker" name="duty">
        <option value="-1">No Preference</option>                            
        <option value="1">Care for Infant</option>
        <option value="2">Care for Young Children</option>
        <option value="3">Care for Elderly/Disabled</option>
        <option value="4">Cooking</option>
        <option value="5">General Housekeeping</option>                     
        </select>
    </label>
    </div>
                   
</div>
</div>




<div class="row">
<div class="col-md-12">
<h3>Age Group</h3>

    <div class="search-category-container">
    <label class="styled-select">
        <select class="dropdown-product selectpicker" name="age">
        <option value="-1">No Preference</option>                            
        <option value="1">21 - 25</option>
        <option value="2">26 - 30</option>
        <option value="3">31 - 35</option>
        <option value="4">36 - 40</option>
        <option value="5">Above 40</option>                     
        </select>
    </label>
    </div>
                   
</div>
</div>



<div class="row">
<div class="col-md-12">
<h3>Language</h3>

    <div class="search-category-container">
    <label class="styled-select">
        <select class="dropdown-product selectpicker" name="lang">
        <option value="-1">No Preference</option>                            
        <option value="1">English</option>
        <option value="2">Mandarin/Chinese-Dialect</option>
        <option value="3">Bahasa Indonesia/Malaysia</option>
        <option value="4">Hindi</option>
        <option value="5">Tamil</option>                     
        </select>
    </label>
    </div>
                   
</div>
</div>

<div class="education item">
<h3>Other Requirements	<i class="ti-pencil"></i></h3>
<div class="form-group is-empty">
<textarea class="form-control" rows="4"></textarea>
<span class="material-input"></span><span class="material-input"></span></div>
<a href="/" class="btn btn-common">Submit</a>
</div>

</div>



</div>
</div>
</div>
</div>
</div>


      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="ti-arrow-up"></i>
      </a>

      <footer>




<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>All Rights reserved © 2019 - Oud&amp; Maid<a rel="nofollow" href="/">Oud Maid</a></p>
</div>
</div>
</div>
</div>

</footer>      
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