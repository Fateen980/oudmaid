<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                    <a class="active" href="/">
                    Home 
                    </a>
    
                  </li>
                  <li>
                    <a href="/search">
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
                  <li class="left"> <a href="/agencyJoin"><i class="ti-pencil-alt"></i> Maid Agency , Join Us</a></li>
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

      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Find the maid that fits your needs</h1><br><h2>Thousands of Filipino maid, Indonesian maid, Indian maid, Myanmar maid, Sri Lankan maid, Part-time maid. Arrange with Maid Agency to interview maids.</h2>
              <div class="content">
                <form method="" action="/search" nctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Filipino maid, baby sitter, etc.">
                        <i class="ti-time"></i>
                      </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                      <div class="search-category-container">
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
                    </div>



                    <div class="col-md-4 col-sm-6">
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
                    </div>
                  </div>



                  <div class="row">

                  <div class="col-md-12 col-sm-6">
                     
                     </div>

                  </div>


                  <div class="row">
  
                  <div class="col-md-4 col-sm-6">
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
                    </div>
                



                    <div class="col-md-4 col-sm-6">
                      <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="language">
                            <option  value="-1">Language</option>
                            <option  value="1"> English</option>
                            <option  value="2">Mandarin/Chinese-Dialect</option>
                            <option  value="3">Bahasa Indonesia/Malaysia</option>
                            <option  value="4">Hindi</option>
                            <option  value="5">Tamil</option>

                          </select>
                        </label>
                      </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                      <div class="search-category-container" >
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="mStatus">
                            <option value="-1">Mairtal Status	</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                          </select>
                        </label>
                      </div>
                    </div>


                </div>

                <div class="row">

                <div class="col-md-12 col-sm-6"></div>

                </div>



                <div class="row">
                <div class="col-md-2 col-sm-6">
                Maid Type
               </div>
                <div class="col-md-10 col-sm-6">
                <div class="radio">
                <label><input type="radio" name="maidType" value="1">New Maid </label>
                <label><input type="radio" name="maidType" value="2">Transfer Maid </label>
                <label><input type="radio" name="maidType" value="3">Ex-Singapore Maid </label>
                </div>
                </div>

                </div>





                <div class="row">
                 <div class="col-md-12 col-sm-6"></div>
                </div>

                <div class="row">

                <div class="col-md-4 col-sm-6">

                <div class="checkbox">
                <label class="checkbox-inline"><input type="checkbox" value="">   Willing to work on off-days</label>
                </div>

                </div>
                <div class="col-md-4 col-sm-6">
                      <a href="/enquiry" >
                      <button type="button" class="btn btn-search-icon">Request Maid</button>
                      </a>
                </div>
                
                <div class="col-md-4 col-sm-6">
                      <button type="submit" class="btn btn-search-icon">Search Maid</button>
                </div>
                </div>


                </form>
              </div>
              <div class="popular-jobs">
     
                <a href="/search/1">Most Recent Maid in 3 days</a>
                <a href="/search/2">English Speaking Maid</a>
                <a href="/search/3">Maid Understand Mandarin</a>

                <a href="/search/4">Understand Hokkien/Cantonese</a>
                <a href="/search/5">New Maid</a>
                <a href="/search/6">Transfer Maid</a>



                <a href="/search/7">Ex-Singapore Maid</a>
                <a href="/search/8">Filipino Maid</a>
                <a href="/search/9">Indonesian Maid</a>

                <a href="/search/10">Myanmar Maid</a>
                <a href="/search/11">Indian Maid</a>
                <a href="/search/15">Punjabi Maid</a>


                <a href="/search/12">Mizoram Maid</a>
                <a href="/search/16">Sri Lankan Maid</a>
                <a href="/search/17">Cambodian Maid</a>
                <a href="/search">Show All Maids</a>

              </div>

            </div>
          </div>
        </div>
      </div>

   
    </section>
    <!-- end intro section -->
    </div>
    
  



    <!-- Featured Jobs Section Start -->
    <section class="featured-jobs section">
      <div class="container">
      <h2 class="section-title">Browse All Maids</h2>







        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <h3 class="cat-title">Filipino Maid <span>(33 Sub Categories)</span></h3>
        </div>


        @foreach ($maids as $maid)
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="/maidProfile/{{ $maid->id }}">
                      <img src="{{ asset($maid->path) }}" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h5 class="job-title"><a href="/maidProfile/{{ $maid->id }}">{{ $maid->name }}</a></h5>
                    <div class="adderess">
        
                      
                        @switch($maid->religion)
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
                        Others
                        @endswitch
                      
                    
                  
                  </div>



                  


                    <div class="adderess">
                    
                    @switch($maid->mStatus)
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
                    
                    
                    ({{ $maid->age }})</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-time"></i> upd on  {{ $maid->updated_at }}</span>
                <div class="view-iocn">
                  <a href="/maidProfile/{{ $maid->id }}"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        

        <br>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <ul class="pagination">

{{ $maids->links() }}

</ul> 
        </div>

         
         
        
       
  </div>
</div>
</section>
    <!-- Featured Jobs Section End -->





<section class="section">
<div class="container">
<h2 class="section-title"> <a href="/agency"> Agencies  ( {{ $agencyCount }} Agencies) </a></h2>
<div class="row">

<div class="col-md-12">
@foreach ($agencies as $agency)
<div class="col-md-3 col-sm-3 col-xs-12 f-category">
<a href="/agencyProfile/{{ $agency->id }}">
<div class="thumb">
<img src="{{ asset('img/agency/' . $agency->path . '') }}" alt="img">
</div>

</a>
</div>
@endforeach

</div>
</div>
</div>
</section>



    
     
    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h2 class="medium-title">
          Maid News
        </h2>
        <div class="row">


          @foreach ($feeds as $feed)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="/news">
                  <img src="assets/img/blog/home-items/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> {{ $feed->date }}</span>
                  <span class="comments"><a href="/news"><i class="ti-comment-alt"></i></a></span>
                </div>
                <a href="/news">
                  <h3>
                  {{ $feed->subject }}
                  </h3>
                </a>
                <p>
               
                </p>
                <a href="/news"class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          @endforeach


        

         

         
        </div>
      </div>
    </section>
    <!-- blog Section End -->





        <!-- Start Request Maid Section -->
        <section class="section purchase" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="section-content text-center">
            <h1 class="title-text">
            Submit Your Requirements of Maid
            </h1>
            <p>We will match maids for you</p>
            <a href="/enquiry" class="btn btn-common">Get Started Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Request Maid Section  -->


  
    
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