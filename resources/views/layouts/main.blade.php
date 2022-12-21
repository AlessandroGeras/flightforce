{{--Layout Principal--}}

@php
date_default_timezone_set('America/Sao_Paulo');
@endphp

@if(session('msg'))
<script>
    alert("{{session('msg')}}")
</script>
@endif

<html>

<head>
    <title>@yield("title")</title>

    <x-layout.head />
</head>

<body>

    <navbar>
        <div class="bg-[#06103d] h-10 w-full">
            <x-navbar.navbar_left />
        </div>
    </navbar>

    <main>
        @yield("corpo")
    </main>

</body>

</html>