@extends('layouts.master')

@section('title')
    CSCI E-15 P3 Lorem Ipsum Generator
@stop

@section('head')

@stop

@section('header')
Lorem Ipsum
@stop

@section('content')

@if(count($errors) > 0)
  <font color="red">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </font>
@endif

<h1>Lorem Ipsum Generator:</h1>
  <form method='POST' action='/loremipsum'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <label for='paragraph_num'>Enter the number of paragraphs you needed:</label>
    <input name='paragraph_num' type='number' min='1' max='99' value='6' /> (Max:99)
    <br>
    <input type='submit' value='Generate'>
  </form>
{!! $results !!}
@stop
