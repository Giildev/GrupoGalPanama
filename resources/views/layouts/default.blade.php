<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  @include('includes.head')
</head>
<body>
  <div id="header">
    <div id="areasegura">
      @include('includes.header')
    </div>
  </div>
  <div class="">
    @include('includes.slider')
  </div>
  <div id="main" class="row">
    @yield('content')
  </div>
</body>
<footer>
  @include('includes.footer')
</footer>
