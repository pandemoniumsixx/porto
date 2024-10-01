@extends('layouts.layout-sub')
@section('content')
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
                           <img src="{{('assets/images/porto-ticket-program.jpg')}}" alt="" class="image">
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
                           <img src="{{('assets/images/movie-ticketing.jpg')}}" alt="" class="image">
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
                           <img src="{{('assets/images/stylezest.jpg')}}" alt="" class="image">
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
                           <img src="{{('assets/images/img-4.png')}}" alt="" class="image">
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
                           <img src="{{('assets/images/img-5.png')}}" alt="" class="image">
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
         </div>
      </div>
      <!-- portfolio section end -->
    
@endsection