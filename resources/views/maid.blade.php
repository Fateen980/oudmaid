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
                    <a  href="/search" class="active">
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
              <li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i>  Log In</a></li>          
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



@foreach($maids as $maid)
<div id="content">
<div class="container">
<div class="row">



<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="right-sideabr">
  
<div class="inner-box">
<h4>Maid Agency</h4>
<ul class="lest item">
<li>


<img src="{{ asset( $maid->realPath ) }}" alt="">
</li>
<li>
<a class="active" href="/agencyProfile/{{ $agencies[$maid->agency_id]->id }}">

<figure class="item-thumb">

                      <img src="/img/agency/{{ $agencies[$maid->agency_id]->path }}" alt="">

                  </figure></a>



</li>



<li><a class="active" href="/agencyProfile/{{ $agencies[$maid->agency_id]->id }}">{{ $agencies[$maid->agency_id]->name }}</a></li>
</ul>
<h4>Contact Person</h4>
<ul class="lest item">
<li>{{ $agencies[$maid->agency_id]->contactPerson }}</li>
</ul>


<h4>Phone</h4>
<ul class="lest item">
<li>{{ $agencies[$maid->agency_id]->tel }}</li>
</ul>

</div>
</div>
</div>
<div class="col-md-8 col-sm-8 col-xs-12">
<div class="inner-box my-resume">
<div class="author-resume">
<div class="thumb">
<img src="{{ asset( $maid->path ) }}" alt="">
</div>
<div class="author-info">
 <h3>Maid Name : {{ $maid->name }}</h3>
<p class="sub-title">Ref Code : {{ $maid->refCode }}</p>

</div>
</div>
<div class="work-experence item">
<h3>Type </i></h3>
<p>@switch($maid->type)
                        @case(1)
                        New Maid
                        @break

                        @case(2)
                        Transfer Maid
                        @break

                        @case(3)
                        Ex-Singapore Maid
                        @break

                        @default
                        No Preference
                        @endswitch
</p>


<h3>Nationality </i></h3>
<p>@switch($maid->nationality)
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
                        @endswitch</p>

<br>
<h4>Date Of Birth</h4>

<span class="date"> {{ $maid->age }} </span>

<br>
<h4>Place Of Birth</h4>
<p>Philpense</p>


<br>
<h4>Height</h4>
<p>{{ $maid->height }} (cm)</p>

<br>
<h4>Weight</h4>
<p>{{ $maid->weight }} (kg)</p>


<br>
<h4>Religion</h4>
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


<br>
<h4>Marital Status</h4>
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
                        @endswitch</p>




<br>
<h4>Number of Children</h4>
<p>{{ $maid->numberChildren }} Child</p>


<br>
<h4>Children's Ages</h4>
<p>{{ $maid->numberChildren }}</p>


<br>
<h4>Education</h4>
<p>@switch($maid->eduction)
                        @case(1)
                        College/Degree 
                        @break

                        @case(2)
                        High School 
                        @break

                        @case(3)
                        Secondary 
                        @break


                        @case(4)
                        Primary Level 
                        @break


                        @default
                        No Preference
                        @endswitch</p>


<br>
<h4>Off-days</h4>
<p>@switch($maid->offDays)
                        @case(0)
                        No
                        @break

                        @case(1)
                        Yes
                        @break


                        @default
                        No
                        @endswitch</p>


<br>
<h4>Language</h4>
<p>@switch($maid->language)
                        @case(1)
                        English
                        @break

                        @case(2)
                        Mandarin/Chinese-Dialect
                        @break

                        @case(3)
                        Bahasa Indonesia/Malaysia
                        @break


                        @case(4)
                        Hindi
                        @break


                        @case(5)
                        Tamil
                        @break

                        @default
                        No Preference
                        @endswitch</p>

<br>
<h4>Expected Salary</h4>
<p>{{ $maid->expectedSalary }}</p>


</div>

@if($youtubeURL != '')
<div class="education item">
<h3>Maid Vedio</i></h3>
<iframe width="700" height="315" src="https://www.youtube.com/embed/{{ $youtubeURL}}
?autoplay=1&autohide=1&controls=1&showinfo=0&modestbranding=1&rel=0"></iframe>
</div>
@endif
<div class="education item">
<h3>Maid Introduction</i></h3>

<p>{{ $maid->introduction }}</p>


</div>
</div>
</div>
</div>
</div>
</div>
@endforeach

      
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