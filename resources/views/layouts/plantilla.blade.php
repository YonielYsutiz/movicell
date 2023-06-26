<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

  <style>
    .active{
      color: blue;
      font-weight: bold;
    }
  </style>
</head>
<body>
  @include('layouts.patials.header')
  @yield('content')
</body>
</html>