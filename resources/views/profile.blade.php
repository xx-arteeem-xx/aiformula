@extends('pattern')

@section('content')

    <div class="container">

        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-3">
                <h1 class="mb-3 display-3 fw-bold">Профиль</h1>
                <h2 class="mb-3">
                    Xx_arteeem_xX <button type="button" class="btn btn-outline-success btn-sm">✎</button> <br> 
                    <small class="text-body-secondary">artem.firsov.qwe@gmail.com</small> <button type="button" class="btn btn-outline-success btn-sm">✎</button>
                </h2>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Удалить профиль</button>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Удаление профиля</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить профиль?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Да</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Нет</button>
                    </div>
                </div>
            </div>
        </div>
        
        <h3 class="mb-5">Сохраненные рецепты:</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="./img/1.jpg" class="rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4>Название рецепта</h4>
                        <p class="card-text">Описание рецепта</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                            </div>
                            <small class="text-body-secondary">Категория</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="./img/1.jpg" class="rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4>Название рецепта</h4>
                        <p class="card-text">Описание рецепта</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                            </div>
                            <small class="text-body-secondary">Категория</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="./img/1.jpg" class="rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4>Название рецепта</h4>
                        <p class="card-text">Описание рецепта</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                            </div>
                            <small class="text-body-secondary">Категория</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="./img/1.jpg" class="rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4>Название рецепта</h4>
                        <p class="card-text">Описание рецепта</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                            </div>
                            <small class="text-body-secondary">Категория</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Xx_arteeem_xX
@endsection
