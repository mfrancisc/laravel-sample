<!doctype htmml>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Document</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" title="" type="" />
 <link rel="stylesheet" href="{{ elixir('css/all.css')}}" title="" type="" /> 

</head>

<body>
<div class="container">

  @include('partials.flash')

  @yield('content')

</div>


<script src="//code.jquery.com/jquery.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

<script type="text/javascript" charset="utf-8">

 $('div.alert').not('.alert-important').delay(3000).slideUp(300); 

</script>

@yield('footer')

</body>

</html>
