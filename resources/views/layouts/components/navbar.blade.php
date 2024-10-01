<!-- header section start --> 
<div class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('skill') }}">Skills</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a>
                </li> 
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('contact') }}">Contact Me</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
       <section class="slide-wrapper">
          <div class="container-fluid">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-6">
                               <div class="banner_taital_main">
                                  <h3 class="banner_text">Hello, I'm <br>Devano</h3>
                                  <h1 class="banner_taital">QA Engineer</h1>
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="social_icon">
                                  <ul>
                                     <li><a href="https://www.linkedin.com/in/devanofernando/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                     <li><a href="https://www.instagram.com/devano_fer?igsh=ZW4zbWV5ZzZmZGxi"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <div class="container">
          <div class="video_bt">
             <div class="play_icon"><img src="{{asset('assets/images/play-icon.png')}}"></div>
          </div>
       </div>
    </div>
    <!-- banner section end -->
 </div>
 <!-- header section end -->