@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>This is content</p>

  @include('components.message', ['msg_title'=>'OK',
    'msg_content'=>'This is sub-view'])

    @endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

