<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
            <a class="navbar-brand" href="#">LaraVue</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link to="/" class="nav-link" >Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/tasks" class="nav-link" >To do-list</router-link>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
