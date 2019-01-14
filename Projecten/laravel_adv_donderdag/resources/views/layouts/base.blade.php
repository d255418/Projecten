<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trello Clone</title>
    <link href="https://unpkg.com/nes.css@0.0.2/css/nes.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>My Trello Clone</h1>

    <section class="container with-title">
        <h2 class="title">Actions</h2>
        <div>
            <a class="btn" href="{{route('todos.index')}}">Todos</a>
            <a class="btn is-primary" href="{{route('todos.create')}}">Create Todo</a>
        </div>
    </section>

    @yield('content')

    <footer>copyright Laura Kruidhof &copy; </footer>
</div>
</body>
</html>