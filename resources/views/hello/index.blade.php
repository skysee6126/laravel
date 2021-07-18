@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  <p>This is content</p>
  <table>
    @foreach($data as $item)
    <tr><th>{{ $item['name'] }}</th><td>{{ $item['email'] }}</td></tr>
    @endforeach
  </table>
  @endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

