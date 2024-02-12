<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')

    <main class="bg-light">
        @include('partials.jumbo')
        <div class="comicsList">
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <p>{{ $comic['series'] }}</p>
                        </div>
                        {{-- <div>
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <p>{{ $comic['series'] }}</p>
                        </div> --}}
                    @endforeach
                </div>
            </div>

        </div>
        @include('partials.merch')

    </main>



    @include('partials.footer')
</body>

</html>
