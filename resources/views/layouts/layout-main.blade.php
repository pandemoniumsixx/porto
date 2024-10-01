<!DOCTYPE html>
<html lang="en">
   @include('layouts.components.header')   
   <body>
      @include('layouts.components.navbar')
      @include('layouts.components.navbar-image')
      @yield('content')
      @include('layouts.components.footer')
      @include('layouts.components.script')
   </body>
</html>