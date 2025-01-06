<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'FIGO' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <style>
            .open-sans-<uniquifier> {
                            font-family: "Open Sans", sans-serif;
                            font-optical-sizing: auto;
                            font-weight: <weight>;
                            font-style: normal;
                            font-variation-settings:
                                "wdth" 100;
                        }


                        body {
                            font-family: "Open Sans";
                        }
        </style>
    </head>
    <body>
    <nav class="navbar bg-info">
        <div class="container">
            <span class="navbar-brand mb-0 h1" style="color: white;">DATA SENSOR</span>
        </div>
    </nav>

        {{ $slot }}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </body>
</html>
