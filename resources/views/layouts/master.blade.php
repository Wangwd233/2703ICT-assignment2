<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{asset ('css/wp.css')}}" >
</head>

<body>
    <a href="{{url("/product")}}">List</a>
    @yield('content')
</body>