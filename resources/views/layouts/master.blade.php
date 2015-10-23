<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'CSCI E-15 P3' --}}
        @yield('title','CSCI E-15 P3')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link property = "external" href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header class="header">
        <img
        src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFPn7t1KMc2WWiLYieetOUeI9ICYFCQSjqoeqzrb7j9sZ59qbAxg'
          style="width:100%"
        alt='P3 Logo'>
    </header>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand active" href="/">Developer's Best Friend</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            {{-- Yield the menu navigated with highlighted choice --}}
            <li @yield('homemenu')><a href="/">Home</a></li>
            <li @yield('loremipsummenu')><a href="/loremipsum">Lorem Ipsum Generator</a></li>
            <li @yield('randomusermenu')><a href="/randomuser">Random User Generator</a></li>
            <li @yield('xkcdstylepasswordmenu')><a href="/xkcdstylepassword">xkcd Style Password Generator</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer class="footer">
         <div class="container">
           <p class="text-muted">Author: Jean Yu Chun Su | Course: CSCI E-15 | Copyright&copy;{{ date('Y') }}</p>
         </div>
    </footer>


    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
