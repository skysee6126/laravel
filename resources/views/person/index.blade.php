@extends('layouts.helloapp')
@section('title', 'Person.index')

@section('menubar')
  @parent
  index page 인덱스페이지
@endsection

@section('content')
  <table>
    <tr><th>Person</th>><th>Board</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->getData() }}</td>
        <td>
          @if ($item->boards != null)
          <table width="100%">
            @foreach ($item->boards as $obj)
              <tr><th>{{ $obj->getData() }}</th></tr>
            @endforeach
          </table>
          @endif
        </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection

