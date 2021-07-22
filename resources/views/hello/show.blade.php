@extends('layouts.helloapp')
@section('title', 'Show')

@section('menubar')
  @parent
  Details page
@endsection

@section('content')
  @if ($items != null)
    @foreach($items as $item)
    <table width="400px">
      <tr><th width="50px">id: </th><td width="50px">{{ $item->id }}</td></tr>
      <tr><th width="50px">name: </th><td width="50px">{{ $item->name }}</td></tr>
      <tr><th width="50px">mail: </th><td width="50px">{{ $item->mail }}</td></tr>
      <tr><th width="50px">age: </th><td width="50px">{{ $item->age }}</td></tr>
    </table>
    @endforeach
  @endif
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

