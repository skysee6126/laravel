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
    @isset ($msg)
      <p>Hello, {{ $msg }}</p>
    @else
    <p>please fill out your name</p>
    @endisset
      <form method="POST" action="/hello">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
</body>
</html>
