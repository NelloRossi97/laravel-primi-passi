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
            <h3 class="text-center mt-3">{{ $description }}</h3>
            <div class="mt-5">
                <p>
                    Laravel è un framework per applicazioni web con una sintassi espressiva ed elegante. Un framework
                    web
                    fornisce una struttura e un punto di partenza per creare la tua applicazione, permettendoti di
                    concentrarti sulla creazione di qualcosa di straordinario mentre ci occupiamo dei dettagli.
                </p>
                <p>
                    Laravel si impegna a fornire un'esperienza di sviluppo straordinaria fornendo allo stesso tempo
                    potenti
                    funzionalità come un'integrazione completa delle dipendenze, un livello di astrazione del database
                    espressivo, code e lavori pianificati, test di unità e integrazione e altro ancora.
                </p>
                <p>
                    Che tu sia nuovo ai framework web PHP o che tu abbia anni di esperienza, Laravel è un framework che
                    può
                    crescere con te. Ti aiuteremo a muovere i primi passi come sviluppatore web o ti daremo una spinta
                    mentre porti la tua esperienza al livello successivo. Non vediamo l'ora di vedere cosa costruisci.
                </p>
            </div>

        </main>
    </div>
    {{-- Bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
