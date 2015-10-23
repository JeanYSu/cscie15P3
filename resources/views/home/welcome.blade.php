@extends('layouts.master')

@section('title')
    CSCI E-15 P3 Developer's Best Friend
@stop

@section('homemenu')
  class="active"
@stop
@section('loremipsummenu')

@stop
@section('randomusermenu')

@stop
@section('xkcdstylepasswordmenu')

@stop


@section('content')

<div class="container">
  <h1>Developer's Best Friend</h1>
  <h4>This application includes three useful tools for developers to generate random data used in daily unit testing work.
    <br/>
    Please click on the menu above or the title of images below to access individual tools.
  </h4>
</div>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="http://www.raywhite.com.lb/wp-content/uploads/2015/03/loremipsumtext.jpg" alt="LoremIpsum Generator" width="100%">
        <div class="carousel-caption">
          <h3><a href="/loremipsum">Lorem Ipsum Generator</a></h3>
          <p>Publish paragrahs of words as a text placeholder in designing an application...</p>
        </div>
      </div>

      <div class="item">
        <img src="https://lh5.googleusercontent.com/bI8PYN2RpCUpBNbxvUCXhYBGcmwbw-JjHx2jWr8cvak1GnSO_TETKnPMv7ggI3xokri5zgLH=s640-h400-e365" alt="Random User Generator" width="100%">
        <div class="carousel-caption">
          <h3><a href="/randomuser">Random User Generator</a></h3>
          <p>Create a set of random users for developers to use in unit testing...</p>
        </div>
      </div>

      <div class="item">
        <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="Flower" width="100%">
        <div class="carousel-caption">
          <h3><a href="/xkcdstylepassword">xkcd Style Password Generator</a></h3>
          <p>Create a password that is easy to remember with xkcd style...</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


@stop
