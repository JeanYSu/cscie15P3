@extends('layouts.master')

@section('title')
    CSCI E-15 P3 Lorem Ipsum Generator
@stop


@section('homemenu')

@stop
@section('loremipsummenu')
  class="active"
@stop
@section('randomusermenu')

@stop
@section('xkcdstylepasswordmenu')

@stop


@section('content')

@if(count($errors) > 0)
  <div class="container">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ $error }}
        </div>
    @endforeach
  </div>
@endif

<div class="container">
  <h1>Lorem Ipsum Generator:</h1>
  <form class="form-horizontal" method='POST' action='/loremipsum'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label class="control-label col-sm-2" for='paragraph_number'>Number of paragraphs:</label>
      <div class="col-sm-5">
        <input class="form-control" id='paragraph_number' name='paragraph_number' type='number' min='1' max='99' value='{{$paragraphsCount}}'/> (Max:99)
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info">Generate</button>
      </div>
    </div>
  </form>
</div>

@if(count($paragraphs)> 0)
<div class="container">
  <h2>Results</h2>
  <ul class="list-group">
        @foreach ($paragraphs as $key => $value)
          <li class="list-group-item"><span class="badge">{{ $key+1 }}</span> {{ $value }}</li>
        @endforeach
  </ul>
</div>
@endif

@stop
