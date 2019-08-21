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
                    <a class="active" href="/search">
                    Maid Search 
                    </a>
                  
                  </li>
                  <li>
                    <a href="/agency">
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

                  <li>
                  <a href="/news">
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
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="right-sideabr">
<div class="inner-box">
<form method="" action="/search" nctype="multipart/form-data">
@csrf
    <h5>Keywords</h5>
    <ul class="lest item">
    <li>               
        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Filipino maid, baby sitter, etc.">
                        <i class="ti-time"></i>
                      </div>
    </li>
    <li><h5>Maid Type</h5></li>
    <li> 
        <div class="radio">
                <label><input type="radio" value="1" name="maidType" >New Maid </label>
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
    <li>

    <div class="checkbox">
                <label class="checkbox-inline"><input type="checkbox" value="">   Willing to work on off-days</label>
    </div>

    </li>

    <li>

<div class="checkbox">
            <label class="checkbox-inline"><input type="checkbox" name="withVedio" value="1"> Maid With Video</label>
</div>

</li>
    <li><div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="nationality">
                            <option value="-1">Nationality</option>                            
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
    </li>
    <li>

    <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="education">

                            <option value="-1">Education</option>
                            <option value="1">College/Degree (>=12 yrs)</option>
                            <option value="2">High School (10~12 yrs)</option>
                            <option value="3">Secondary (7~9 yrs)</option>
                            <option value="4">Primary Level (5~6 yrs)</option>

                          </select>
                        </label>
                      </div>

    </li>
    <li>

    <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="language">
                            <option value="-1">Language</option>
                            <option value="1">English</option>
                            <option value="2">Mandarin/Chinese-Dialect</option>
                            <option value="3">Bahasa Indonesia/Malaysia</option>
                            <option value="4">Hindi</option>
                            <option value="5">Tamil</option>

                          </select>
                        </label>
                      </div>

    </li>
    <li>

    <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="age">
                            <option value="-1">Age</option>
                            <option value="1">21 - 25</option>
                            <option value="2">26 - 30</option>
                            <option value="3">31 - 35</option>
                            <option value="4">36 - 40</option>
                            <option value="5">Above 40</option>
                          </select>
                        </label>
                      </div>
    </li>
    <li><button type="submit" class="btn btn-search-icon">Search Maid</button></li>
    </ul>
    
</form>


<ul class="lest item">
<li><a href="/search/1">Most Recent Maid <span class="notinumber">2</span></a></li>
<li><a href="/search/2">English Speaking Maid <span class="notinumber"> {{ $englishMaidsCount }} </span></a></li>
<li><a href="/search/3">Mandarin Speaking Maid <span class="notinumber">{{ $mandarinMaidsCount }}</span></a></li>
<li><a href="/search/4">Hokkien/Cantonese <span class="notinumber">2</span></a></li>
<li><a href="/search/5">New Maid <span class="notinumber">{{ $newMaidsCount }}</span></a></li>
<li><a href="/search/6">Transfer Maid <span class="notinumber">{{ $transferMaidsCount }}</span></a></li>
<li><a href="/search/7">Ex-Singapore Maid <span class="notinumber">{{ $exMaidsCount }}</span> </a></li>

</ul>
<h5>Search By Country</h5>
<ul class="lest item">
<li><a href="/search/8">Filipino <span class="notinumber">{{ $FilipinoCount }}</span></a></li>
<li><a href="/search/9">Indonesian Maid <span class="notinumber"> {{ $IndonesianCount }}</span></a></li>
<li><a href="/search/10">Myanmar Maid <span class="notinumber">{{ $MyanmeseCount }}</span></a></li>
<li><a href="/search/11">Indian Maid <span class="notinumber"> {{ $IndianCount }}</span></a></li>
<li><a href="/search/12">Mizoram Maid <span class="notinumber">0</span></a></li>
<li><a href="/search/13">Darjeeling Maid <span class="notinumber">0</span></a></li>
<li><a href="/search/14">Manipur Maid <span class="notinumber">0</span></a></li>
<li><a href="/search/15">Punjabi Maid <span class="notinumber">0</span></a></li>
<li><a href="/search/16">Sri Lankan Maid <span class="notinumber">{{ $linkaCount }}</span></a></li>
<li><a href="/search/17">Cambodian Maid <span class="notinumber">{{  $CambodianCount }}</span></a></li>
<li><a href="/search/18">Bangladeshi Maid <span class="notinumber">{{  $BangladeshiCount }}</span></a></li>
</ul>

</div>
</div>
</div>
<div class="col-md-8 col-sm-8 col-xs-12">
<div class="job-alerts-item">
<h3 class="alerts-title">Maids List</h3>



@foreach($maids as $maid)
<div class="alerts-content">
<div class="row">
<div class="col-md-3">
<figure class="item-thumb">
                    <a class="hover-effect" href="/maidProfile/{{ $maid->id }}">
                      <img src="{{ asset($maid->path) }}"  alt="">
                    </a>
                  </figure>
</div>
<div class="col-md-4">
<h3>{{ $maid->name }}</h3>
<span class="location"><i class="ti-location-pin"></i>@switch($maid->nationality)
                        @case(1)
                        Filipino
                        @break

                        @case(2)
                        Indonesian
                        @break

                        @case(3)
                        Myanmese
                        @break


                        @case(4)
                        Indian
                        @break


                        @case(5)
                        Sri Lankan
                        @break

                        @case(6)
                        Cambodian
                        @break

                        @case(7)
                        Bangladeshi
                        @break

                        @default
                        No Preference
                        @endswitch</span>
                        <p>@switch($maid->religion)
                        @case(1)
                        Free Thinker
                        @break

                        @case(2)
                        Christian
                        @break

                        @case(3)
                        Catholic
                        @break


                        @case(4)
                        Buddhist
                        @break


                        @case(5)
                        Muslim
                        @break

                        @case(6)
                        Hindu
                        @break

                        @case(7)
                        Sikh
                        @break

    
                        @case(8)
                        Others
                        @break  

                        @default
                        No Preference
                        @endswitch</p>
</div>
<div class="col-md-2">
<p>@switch($maid->mStatus)
                        @case(1)
                        Single
                        @break

                        @case(2)
                        Married
                        @break

                        @case(3)
                        Widowed
                        @break


                        @case(4)
                        Divorced
                        @break


                        @case(5)
                        Separated
                        @break



                        @default
                        No Preference
                        @endswitch
                    
                    
                    ({{ $maid->age }})</p>
</div>

<div class="col-md-3">
<p>Ref : {{ $maid->id }}</p>
</div>
</div>
</div>
@endforeach




























<br>
<ul class="pagination">

{{ $maids->links() }}

</ul>

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