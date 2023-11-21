@extends('pattern')

@section('content')
    <div class="container" >
        <div class="row align-items-center g-lg-5 py-5" style="min-height: 70vh">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Вход</h1>
                <p class="col-lg-10 fs-4">
                    Войдите, чтобы просматривать схораненные вами рецепты
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Логин</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="floatingPassword">Пароль</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Запомнить меня
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Вход
@endsection
