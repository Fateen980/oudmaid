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
                  <li class="left"> <a href="/home" class="active"><i class="ti-pencil-alt"></i>Profile</a></li>
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
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="right-sideabr">
<div class="inner-box">
<h4>Manage Account</h4>
<ul class="lest item">
<li><a  href="/home">Maids List <span class="notinumber">{{ $activeMaids }}</span></a></li>
<li><a href="#">Hidden Maids  <span class="notinumber">{{ $activeNoMaids }}</span></a></li>
<li><a href="#">Notifications <span class="notinumber">0</span></a></li>
</ul>
<h4>Manage Maid</h4>
<ul class="lest item">
<li><a class="active" href="/add">Add New Maid</a></li>

</ul>
<ul class="lest">
<li><a href="#">Change Password</a></li>
<li><a href="{{ route('login') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                  </form>
</ul>
</div>
</div>
</div>
<div class="col-md-8 col-sm-8 col-xs-12">
<div class="job-alerts-item candidates">
<h3 class="alerts-title">Add New Maid</h3>

@if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
<form id="form" action="/addMaid" method="POST" enctype="multipart/form-data">
@csrf
  
<div class="form-group">
<div class="button-group">
<div class="action-buttons">
<div class="upload-button">
<button class="btn btn-common btn-sm">Upload Photo</button>
<input id="profile_image" type="file" class="form-control" name="profile_image">    
 </div>
</div>
</div>
</div>

<div class="form-group is-empty">
<label class="control-label">Maid Name</label>
<input type="text" name="name" class="form-control" placeholder="Maid Name" value="{{ old('name') }}">
<span class="material-input"></span></div>




<div class="form-group is-empty">
<label class="control-label">YouTube Vedio URL</label>
<input type="text" name="website" class="form-control" placeholder="http://" value="{{ old('website') }}">
<span class="material-input"></span></div>


<div class="form-group is-empty">
<label class="control-label">Number Of Children</label>
<input type="text" name="numberofchildren" class="form-control" placeholder="Number Of Children" value="{{ old('numberofchildren') }}">
<span class="material-input"></span></div>



<div class="form-group is-empty">
<label class="control-label">Expected Salary</label>
<input type="text" name="salary" class="form-control" placeholder="Expected Salary" value="{{ old('salary') }}">
<span class="material-input"></span></div>



<div class="form-group is-empty">
<label class="control-label">Height</label>
<input type="text" name="height" class="form-control" placeholder="Height" value="{{ old('height') }}">
<span class="material-input"></span></div>


<div class="form-group is-empty">
<label class="control-label">Weight</label>
<input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ old('weight') }}">
<span class="material-input"></span></div>
<ul>


<div class="form-group is-empty">
<label class="control-label">Nationality </label>
<li><div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="nationality">
                            <option @if(old('nationality') == -1) selected  @endif     value="-1">Nationality</option>                            
                            <option @if(old('nationality') == 1)  selected  @endif     value="1">Filipino</option>
                            <option @if(old('nationality') == 2)  selected  @endif     value="2">Indonesian</option>
                            <option @if(old('nationality') == 3)  selected  @endif     value="3">Myanmese</option>
                            <option @if(old('nationality') == 4)  selected  @endif     value="4">Indian</option>
                            <option @if(old('nationality') == 5)  selected  @endif     value="5">Sri Lankan</option>
                            <option @if(old('nationality') == 6)  selected  @endif     value="6">Cambodian</option>
                            <option @if(old('nationality') == 7)  selected  @endif     value="7">Bangladeshi</option>                              
                          </select>
                        </label>
        </div>
    </li>
</div>

<div class="form-group is-empty">
<label class="control-label">Education</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
                      <select class="dropdown-product selectpicker" name="education">

                        <option @if(old('education') == -1) selected  @endif  value="-1">Education</option>
                        <option @if(old('education') == 1) selected  @endif  value="1">College/Degree (>=12 yrs)</option>
                        <option @if(old('education') == 2) selected  @endif  value="2">High School (10~12 yrs)</option>
                        <option @if(old('education') == 3) selected  @endif  value="3">Secondary (7~9 yrs)</option>
                        <option @if(old('education') == 4) selected  @endif  value="4">Primary Level (5~6 yrs)</option>

                      </select>
                    </label>
                  </div>

</li>
</div>

<div class="form-group is-empty">
<label class="control-label">Language</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
                      <select class="dropdown-product selectpicker" name="language">
                        <option @if(old('language') == -1) selected  @endif   value="-1">Language</option>
                        <option @if(old('language') == 1)  selected  @endif   value="1">English</option>
                        <option @if(old('language') == 2)  selected  @endif   value="2">Mandarin/Chinese-Dialect</option>
                        <option @if(old('language') == 3)  selected  @endif   value="3">Bahasa Indonesia/Malaysia</option>
                        <option @if(old('language') == 4)  selected  @endif   value="4">Hindi</option>
                        <option @if(old('language') == 5)  selected  @endif   value="5">Tamil</option>

                      </select>
                    </label>
                  </div>

</li>
</div>

<div class="form-group is-empty">
<label class="control-label">Age</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
                      <select class="dropdown-product selectpicker" name="age">
                        <option @if(old('age') == -1) selected  @endif value="-1">Age</option>
                        <option @if(old('age') == 1)  selected  @endif value="1">21 - 25</option>
                        <option @if(old('age') == 2)  selected  @endif value="2">26 - 30</option>
                        <option @if(old('age') == 3)  selected  @endif value="3">31 - 35</option>
                        <option @if(old('age') == 4)  selected  @endif value="4">36 - 40</option>
                        <option @if(old('age') == 5)  selected  @endif value="5">Above 40</option>
                      </select>
                    </label>
                  </div>
</li>
</div>

<div class="form-group is-empty">
<label class="control-label">Mairtal Status</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
<select class="dropdown-product selectpicker" name="mStatus">
                            <option @if(old('mStatus') == -1) selected  @endif value="-1">Mairtal Status	</option>
                            <option @if(old('mStatus') == 1) selected  @endif value="1">Single</option>
                            <option @if(old('mStatus') == 2) selected  @endif value="2">Married</option>
                            <option @if(old('mStatus') == 3) selected  @endif value="3">Widowed</option>
                            <option @if(old('mStatus') == 4) selected  @endif value="4">Divorced</option>
                            <option @if(old('mStatus') == 5) selected  @endif value="5">Separated</option>
                          </select>
<li>                   </div>

<div class="form-group is-empty">
<label class="control-label">Religion</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
<select class="dropdown-product selectpicker" name="religion">
                            <option @if(old('religion') == -1) selected  @endif value="-1">Religion	</option>
                            <option @if(old('religion') == 1) selected  @endif value="1">Free Thinker</option>
                            <option @if(old('religion') == 2) selected  @endif value="2">Christian</option>
                            <option @if(old('religion') == 3) selected  @endif value="3">Catholic</option>
                            <option @if(old('religion') == 4) selected  @endif value="4">Buddhist</option>
                            <option @if(old('religion') == 5) selected  @endif value="5">Muslim</option>
                            <option @if(old('religion') == 6) selected  @endif value="6">Hindu</option>
                            <option @if(old('religion') == 7) selected  @endif value="7">Sikh</option>
                            <option @if(old('religion') == 8) selected  @endif value="8">Others</option>
                          </select>
<li>                   </div>


<div class="form-group is-empty">
<label class="control-label">Duty</label>
<li>
<div class="search-category-container">
                    <label class="styled-select">
<select class="dropdown-product selectpicker" name="duty">
                            <option @if(old('duty') == -1) selected  @endif value="-1">Duty	</option>
                            <option @if(old('duty') == 1) selected  @endif value="1">Care for Infant</option>
                            <option @if(old('duty') == 2) selected  @endif value="2">Care for Young Children</option>
                            <option @if(old('duty') == 3) selected  @endif value="3">Care for Elderly/Disabled</option>
                            <option @if(old('duty') == 4) selected  @endif value="4">Cooking</option>
                            <option @if(old('duty') == 5) selected  @endif value="5">General Housekeeping</option>
                          </select>
<li>                   </div>





<div class="form-group is-empty">
<label class="control-label">Maid Introduction</label>
<li>
<div class="search-category-container">

<div class="form-group is-empty">
<textarea class="form-control" rows="4" name="introduction" placeholder="Maid Introduction" >{{ old('introduction') }}</textarea>
<span class="material-input"></span><span class="material-input"></span></div>

</div>
<li> </div>

<div class="form-group is-empty">
<label class="control-label">Maid Type</label>
<li>
        <div class="radio">
                <label><input type="radio" value="1" name="maidType" checked >New Maid </label>
        </div>
    </li>
    <li> 
        <div class="radio">
        <label><input type="radio" value="2"  name="maidType" >Transfer Maid </label>
        </div>
    </li>
    <li> 
        <div class="radio">
        <label><input type="radio" value="3"  name="maidType" >Ex-Singapore Maid </label>
        </div>
    </li>
</li>
</div>




<button type="submit" class="btn btn-search-icon">Save Maid</button>
</li>
</div>

 


</div>
</div>
</div>
</div>
</div>
</form>




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



  
      
      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="ti-arrow-up"></i>
      </a>

        
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
