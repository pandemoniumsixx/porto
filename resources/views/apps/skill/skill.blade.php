@extends('layouts.layout-sub')
@section('content')

<!-- services section start -->
<div class="skills_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="services_taital">My <span class="portfolio_taital_1">Hard Skills</span></h1>
         </div>
      </div>

      <div class="skills_section_2">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/icon-1.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/check.png')}}"></div>
                  <h4 class="services_text active">QA Engineer</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/icon-6.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/code.png')}}"></div>
                  <h4 class="services_text">Website Design</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/api.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/api-setting.png')}}"></div>
                  <h4 class="services_text">API Knowledge</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/specification.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/system.png')}}"></div>
                  <h4 class="services_text">Grasp System Specs</h4>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="services_taital">My <span class="portfolio_taital_1">Soft Skills</span></h1>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="skills_section_2">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/conversation.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/communication.png')}}"></div>
                  <h4 class="services_text active">Communication</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/information.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/search.png')}}"></div>
                  <h4 class="services_text">Attention to Detail</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/thinking.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/skill-development.png')}}"></div>
                  <h4 class="services_text">Critical Thinking</h4>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="app_icon"><img src="{{('assets/images/customer-engagement.png')}}"></div>
                  <div class="app_icon_1"><img src="{{('assets/images/collaborate.png')}}"></div>
                  <h4 class="services_text">Collaboration</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- services section end -->

@endsection