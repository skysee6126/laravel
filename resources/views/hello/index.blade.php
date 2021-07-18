@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>This is content</p>
  <p>Controller value<br>'message' = {{ $message}}</p>
  <p>ViewComposer value<br>'view_message' = {{ $view_message }}</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

