
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

@include('includes.style')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    {{-- Navbar --}}
      @include('includes.navbar')
    {{-- NavbarEND --}}
 

    <!-- Sidebar -->
        @include('includes.sidebar')
    {{-- Sidebar END  --}}
  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('judul')</h1>
          </div>
          
        </div>
      </div>
    </div>

    {{-- CONTENT --}}
      @yield('konten')
    {{-- CONTENT END--}}  </div>

    {{-- Footer --}}
        @include('includes.footer')
    {{-- FooterEND --}}
</div>


    {{-- SCRIPT --}}
         @include('includes.script')
         @stack('scripts')

    {{-- SCRIPTEND --}}
</body>
</html>
