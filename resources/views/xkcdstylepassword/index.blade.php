@extends('layouts.master')

@section('title')
    CSCI E-15 P3 xkcd Style Password Generator
@stop

@section('homemenu')

@stop
@section('loremipsummenu')

@stop
@section('randomusermenu')

@stop
@section('xkcdstylepasswordmenu')
  class="active"
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
  <h1>xkcd Style Password Generator:</h1>
  <form class="form-horizontal" method='POST' action='/xkcdstylepassword'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label class="control-label col-sm-2" for='word_number'>Number of Words:</label>
      <div class="col-sm-5">
        <input class="form-control" id='word_number' name='word_number' type='number' min='1' max='9' value='{{$wordCount}}'/> (Max:9)
      </div>
    </div>
    <!-- checkbox for adding a number -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox" id="addnumber" name="addnumber" {{ $addnumber_chkstatus }}>Add a number</label>
       </div>
     </div>
   </div>
    <!-- checkbox for adding a symbol -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox" id="addsymbol" name="addsymbol" {{ $addsymbol_chkstatus }}>Add a special symbol</label>
       </div>
     </div>
   </div>
   <!-- checkbox for changing all to upper cases -->
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-5">
       <div class="checkbox">
         <label><input type="checkbox" id="changeuppercase" name="changeuppercase" {{ $changeuppercase_chkstatus }}>Change all upper cases</label>
      </div>
    </div>
  </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info">Generate Password</button>
      </div>
    </div>
  </form>
</div>

@if(count($words) > 0)
  <div class="container">
    <div class="alert alert-success">
    @foreach ($words as $key => $value)
          @if ($key > 0)
            -
          @endif
          {{ $value }}
    @endforeach
    </div>
  </div>
@endif
@stop
