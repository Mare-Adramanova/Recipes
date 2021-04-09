<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Rirepies</title>
    
</head>
<body class="bg-secondary">
    @yield('extra-java/script')
    <header>
        @include('/partials/navigation')
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>

    <footer>
        @include('/partials/footer')
    </footer>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> 
    <script src="{{ asset('js/app.js') }}"></script> 
    
</body>
</html>