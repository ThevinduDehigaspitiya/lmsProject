{{-- css --}}

@livewireStyles

{{-- bootstrap v5.3 --}}

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
