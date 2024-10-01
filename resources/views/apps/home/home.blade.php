@extends('layouts.layout-main')
@section('content')
      <!-- skills section start -->
      <div class="services_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="services_taital">My <span class="portfolio_taital_1">Skills</span></h1>
              </div>
           </div>
        </div>
        <div class="container">
           <div class="services_section_2">
              <div class="row">
                 <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                       <div class="app_icon"><img src="{{asset('assets/images/icon-1.png')}}"></div>
                       <div class="app_icon_1"><img src="{{asset('assets/images/check.png')}}"></div>
                       <h4 class="services_text active">QA Engineer</h4>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                       <div class="app_icon"><img src="{{asset('assets/images/icon-6.png')}}"></div>
                       <div class="app_icon_1"><img src="{{asset('assets/images/code.png')}}"></div>
                       <h4 class="services_text">Website Design</h4>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                       <div class="app_icon"><img src="{{asset('assets/images/api.png')}}"></div>
                       <div class="app_icon_1"><img src="{{asset('assets/images/api-setting.png')}}"></div>
                       <h4 class="services_text">API Knowledge</h4>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <div class="box_main ">
                       <div class="app_icon"><img src="{{asset('assets/images/specification.png')}}"></div>
                       <div class="app_icon_1"><img src="{{asset('assets/images/system.png')}}"></div>
                       <h4 class="services_text">Grasp System Specs<i class="fa fa-space-shuttle" aria-hidden="true"></i></h4>
                    </div>
                 </div>
              </div>
              <div class="readmore_bt"><a href="#">Read More</a></div>
           </div>
        </div>
     </div>
     <!-- skills section end -->
     <!-- portfolio section start -->
     <div class="portfolio_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="portfolio_taital">My <span class="portfolio_taital_1">Portfolio</span></h1>
              </div>
           </div>
           <div class="portfolio_section">
              <div class="portfolio_section_2">
                 <div class="row">
                    <div class="col-md-8">
                       <div class="container_main">
                          <img src="{{asset('assets/images/porto-ticket-program.jpg')}}" alt="" class="image">
                          <div class="overlay">
                             <div class="text">
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Click to see the detail</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="{{asset('assets/images/movie-ticketing.jpg')}}" alt="" class="image">
                          <div class="overlay">
                             <div class="text">
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Click to see the detail</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="portfolio_section_2">
                 <div class="row">
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="{{asset('assets/images/stylezest.jpg')}}" alt="" class="image">
                          <div class="overlay">
                             <div class="text">
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Click to see the detail</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="{{asset('assets/images/img-4.png')}}" alt="" class="image">
                          <div class="overlay">
                             <div class="text">
                                <div class="btn_main">  
                                   <div class="buy_bt"><a href="#">See More</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="{{asset('assets/images/img-5.png')}}" alt="" class="image">
                          <div class="overlay">
                             <div class="text">
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">See More</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="seemore_bt"><a href="#">See More</a></div>
        </div>
     </div>
     <!-- portfolio section end -->
     <!-- blog section start -->
     <div class="blog_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="blog_taital">My <span class="blog_taital_1">Blog</span></h1>
                 <p class="blog_text">upidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              </div>
           </div>
        </div>
        <div class="blog_section_2">
           <div class="container">
              <div class="row">
                 <div class="col-md-4">
                    <div class="blog_box">
                       <div class="blog_img">
                          <h4 class="date_text">Jun 05</h4>
                          <h4 class="prep_text">Veniam, quis nostrud </h4>
                       </div>
                       <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="blog_box">
                       <div class="blog_img_2">
                          <h4 class="date_text">Jun 05</h4>
                          <h4 class="prep_text">Veniam, quis nostrud </h4>
                       </div>
                       <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="blog_box">
                       <div class="blog_box_3">
                          <div class="blog_img">
                             <h4 class="date_text">Jun 05</h4>
                             <h4 class="prep_text">Veniam, quis nostrud </h4>
                          </div>
                          <p class="lorem_text">elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="readmore_bt_1"><a href="#">Read More</a></div>
           </div>
        </div>
     </div>
     <!-- blog section end -->
     <!-- contact section start -->
     <div class="contact_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="contact_taital">My <span class="contact_taital_1">Contact</span></h1>
              </div>
           </div>
           <div class="contact_section_2">
              <div class="row">
                 <div class="col-md-12">
                    <div class="mail_section_1">
                       <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                       <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                       <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                       <textarea class="massage-bt" placeholder="Your Massage" rows="5" id="comment" name="Your Massage"></textarea>
                       <div class="send_bt"><a href="#">Send Now</a></div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- contact section end -->
     <!-- project box section start -->
     <div class="project_box">
        <div class="container">
           <div class="project_main">
              <h1 class="hire_text">Hire me for your projects</h1>
              <div class="callnow_bt"><a href="#">Call Now</a></div>
           </div>
        </div>
     </div>
     <!-- project box section end -->
     @endsection