<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.frontend.includes.head')
</head>

<body>

  @include('layouts.frontend.includes.header')
  <main id="main">
  @yield('content')
  </main><!-- End #main -->

  @include('layouts.frontend.includes.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('layouts.frontend.includes.foot')

</body>

</html>
