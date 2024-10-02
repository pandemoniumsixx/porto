     <!-- Javascript files-->
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
     <script src="{{asset('assets/js/plugin.js')}}"></script>
     <!-- sidebar -->
     <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
     <script src="{{asset('assets/js/custom.js')}}"></script>
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