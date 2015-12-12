<!doctype htmml>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Document</title>
 <link rel="stylesheet" href="{{ elixir('css/all.css')}}" title="" type="" /> 
</head>

<body>
@include('partials.nav')

<div class="container">


  @include('flash::message')

  @yield('content')

</div>


<script src="/js/all.js" ></script>
<script type="text/javascript" charset="utf-8">

$('#flash-overlay-modal').modal();

 // $('div.alert').not('.alert-important').delay(3000).slideUp(300); 

</script>

@yield('footer')

</body>

</html>
