{{--Layout Principal--}}

@php
date_default_timezone_set('America/Sao_Paulo');
@endphp

@if(session('msg'))
  <script>alert("{{session('msg')}}")</script>
@endif
  
<html>

<head>
  <title>@yield("title")</title>

  <x-layout.head />
</head>

<body>

  <navbar>
    <x-navbar.navbar_left />  
  </navbar>  

  <main>
    @yield("corpo")
  </main>

</body>

</html>