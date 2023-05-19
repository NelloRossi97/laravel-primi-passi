<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel First Steps</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>



</head>

<body class="antialiased">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/features" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="/faqs" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <main>
            <h1 class="text-center mt-5">{{ $title }}</h1>
            <p class="text-center mt-3">{{ $description }}</p>
            @if ($steps)
                <h4 class="mt-5">Per installare il nostro Framework devi eseguire i seguenti comandi:</h4>
                <ul class="mt-3">
                    @foreach ($steps as $step)
                        <li>{{ $step }}</li>
                    @endforeach
                </ul>
            @endif




        </main>
    </div>
    {{-- Bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
