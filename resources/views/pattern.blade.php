<!doctype html>
<html lang="ru" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none display-4">AIFormula</a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
            <li><a href="/category" class="nav-link px-2 text-white">Категория 1</a></li>
            <li><a href="/category" class="nav-link px-2 text-white">Категория 2</a></li>
            <li><a href="/category" class="nav-link px-2 text-white">Категория 3</a></li>
            <li><a href="/category" class="nav-link px-2 text-white">Категория 4</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="/login"><button type="button" class="btn btn-outline-light me-2">Войти</button></a>
            <a href="/register"><button type="button" class="btn btn-primary">Зарегистрироваться</button></a>
        </div>
    </header>
</div>

<main>
    @yield('content')
</main>

<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Главная</a></li>
            <li class="nav-item"><a href="/category" class="nav-link px-2 text-body-secondary">Категория 1</a></li>
            <li class="nav-item"><a href="/category" class="nav-link px-2 text-body-secondary">Категория 2</a></li>
            <li class="nav-item"><a href="/category" class="nav-link px-2 text-body-secondary">Категория 3</a></li>
            <li class="nav-item"><a href="/category" class="nav-link px-2 text-body-secondary">Категория 4</a></li>
        </ul>
        <p class="text-center text-body-secondary">©2023 AIFormula. All rights reserved.</p>
    </footer>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
