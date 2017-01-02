<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" media="screen" title="no title" charset="utf-8">

    <style media="screen">
        #app {
            margin-top: 20px;
        }
    </style>

    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        };
    </script>

    <script src="{{ elixir('js/app.js') }}" charset="utf-8"></script>
</head>
<body>
    <header class="header">
        <nav class="container nav has-shadow"></nav>
    </header>

    <main class="container" id="app">
        @yield('content')
    </main>

    <script type="text/javascript">
        new Vue({
            el: '#app'
        });
    </script>
</body>
</html>
