@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>This is content</p>
  <ul>
  @each('components.item', $data, 'item')
  </ul>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

