@extends('layouts.master')

@section('title')
    CSCI E-15 P3 Random User Generator
@stop

@section('homemenu')

@stop
@section('loremipsummenu')

@stop
@section('randomusermenu')
 class="active"
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
  <h1>Random User Generator:</h1>
  <form class="form-horizontal" method='POST' action='/randomuser'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class="form-group">
      <label class="control-label col-sm-2" for='user_number'>Users needed:</label>
      <div class="col-sm-5">
        <input class="form-control" id='user_number' name='user_number' type='number' min='1' max='20' value='{{$userCount}}'/> (Max:20)
      </div>
    </div>
    <!-- checkbox for adding random user birthdate -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox" id="birthdate" name="birthdate" {{ $birthdate_chkstatus }}> Birthdate included</label>
       </div>
     </div>
   </div>
    <!-- checkbox for adding random user profile text -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox" id="profile" name="profile" {{ $profile_chkstatus }}> Profile included</label>
       </div>
     </div>
   </div>
   <!-- checkbox for adding random user profile text -->
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-5">
       <div class="checkbox">
         <label><input type="checkbox" id="food" name="food" {{ $food_chkstatus }}> Favorite food included</label>
      </div>
    </div>
  </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info">Generate</button>
      </div>
    </div>
  </form>
</div>


  @if(count($users)> 0)
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
            <tr>
              <th>Name</th>
              @if($birthdate_chkstatus == "checked")
                <th>Birthdate</th>
              @endif
              @if($profile_chkstatus == "checked")
                <th>Profile</th>
              @endif
              @if($food_chkstatus == "checked")
                <th>Favoriate Food Image</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td style="width:20%">
                  {{ $user->getName() }}
                </td>
                @if($birthdate_chkstatus == "checked")
                  <td style="width:10%">
                    {{ $user->getBirthdate() }}
                  </td>
                @endif
                @if($profile_chkstatus == "checked")
                  <td>
                    {{ $user->getProfile() }}
                  </td>
                @endif
                @if($food_chkstatus == "checked")
                  <td>
                    <img alt='favoriate food' src={{ $user->getImageURL() }} class="img-thumbnail">
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>

  @else
      <!--no users result and display empty html-->
  @endif

@stop
