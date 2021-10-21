<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Davesweb</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    </head>
    <body>
        <div class="container">
            <div class="row flex-row min-vh-100">
                <main class="col-8 order-0 p-4">
                    @yield('content')
                </main>
                @include('layouts.blog.sidebar')
            </div>
        </div>
    </body>
</html>
