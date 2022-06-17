<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.ico" type="image/icon type">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" crossorigin="anonymous">
    @yield('title')
</head>
<body class="bg-dark text-white">
    <div class="container py-3">
        @include('inc.header')
        @include('chapters.welcome')
        @include('chapters.about_me')
        @include('chapters.my_projects')
        @include('chapters.skills')
        @include('chapters.experience')
        @include('chapters.contacts')
    </div>
    <script>
        function show_login_form()
        {
            if (document.getElementById("login_form").classList.contains("show"))
            {
                document.getElementById("login_form").classList.remove("show");
            }
            else
            {
                document.getElementById("login_form").classList.add("show");
            }
        }
    </script>
</body>
</html>