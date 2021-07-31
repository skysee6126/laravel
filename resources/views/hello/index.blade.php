@extends('layouts.helloapp')
<style>
    .pagination { font-size: 10pt }
    .pagination li { display: inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>
@section('title', 'Index')

@section('menubar')
  @parent
  index page
@endsection

@section('content')
  @if (Auth::check())
  <p>User: {{ $user->name.'('.$user->email.')' }} </p>
  @else
  <p>*You need to login (<a href="/login">Login</a>
  <a href="/register">Register</a>)</p>
  @endif
  <table>
    <tr>
      <th><a href="/hello?sort=name">name</th>
      <th><a href="/hello?sort=mail">mail</th>
      <th><a href="/hello?sort=age">age</th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
      </tr>
    @endforeach
  </table>
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

