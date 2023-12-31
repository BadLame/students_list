@php use Illuminate\Support\Facades\App; @endphp
<html lang="{{ App::getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>@section('title', 'Undefined title')</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
  @yield('css')
  @yield('head-js')
</head>
<body>
@section('header')@show

<div class="container-fluid">
  @section('content')@show
</div>

@section('footer')@show

@yield('js')
</body>
</html>
