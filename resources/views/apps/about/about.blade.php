@extends('layouts.layout-sub')
@section('content')
      <!-- portfolio section start -->
      <div class="portfolio_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="portfolio_taital">About</h1>
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
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
         });
         
         //scroll slides on swipe for touch enabled devices
         
         $("#myCarousel").on("touchstart", function(event){
         
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
         
                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>
    
@endsection