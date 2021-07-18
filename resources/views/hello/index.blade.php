@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>This is content</p>
    <p>This is a link for <middleware>google.com</middleware></p>
    <p>This is a link for <middleware>yahoo.com</middleware></p>
  @endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

