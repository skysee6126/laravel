<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size: 16pt; color: #999; }
    h1 { font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px; }
  </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;for derective</p>
    <ol>
    @foreach($data as $item)
    @if ($loop->first)
    <p>*Data list</p><ul>
    @endif
      <li>No, {{ $loop->iteration }}.{{ $item }}</li>
    @if ($loop->last)
  </ul><p>Until this line</p>
    @endif
    @endforeach
  </ol>
</body>
</html>
