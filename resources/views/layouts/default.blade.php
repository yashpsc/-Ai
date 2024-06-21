<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<header id="myHeader" class="{{ Request::is(['career-back-end-developer', 'career-front-end-developer', 'disclaimer', 'privacy-policy', 'terms-of-use','ethics']) ? 'default-sticky' : '' }}">
   @include('includes.header')
</header>
<body>

   <div id="main">
           @yield('content')
   </div>
   <footer>
       @include('includes.footer')
   </footer>
</body>
</html>