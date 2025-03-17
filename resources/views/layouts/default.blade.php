<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'Tasks')
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}">

    @vite('resources/css/app.css')
</head>
<body class="h-screen" style="background: #ECECEC">

    <nav class="h-38 container mx-auto mt-4">
    <img src="{{ asset('logo.png') }}" alt="Logo">
    </nav>
    
    @yield('content')


    <div class="flex items-center justify-center text-center mt-24 text-gray-400">
        <p>Copyright &copy; 2020 All Rights Reserved</p>
    </div>

</body>
</html>
