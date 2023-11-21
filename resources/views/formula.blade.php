@extends('pattern')

@section('content')

    <div class="container">

        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-3">
                <h1 class="mb-3 display-3 fw-bold">Рецепт</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti distinctio aut doloribus quos magni! Veritatis veniam quae corporis pariatur nemo voluptate rem nobis, vel accusantium odio quaerat magnam totam accusamus eum inventore! Quibusdam fugit suscipit a aspernatur porro dolorum beatae tenetur aliquam voluptates tempora commodi labore inventore deserunt ipsum quaerat placeat, corrupti, perspiciatis optio laboriosam autem veniam reprehenderit impedit? Corporis quidem aliquam porro. Veritatis natus numquam aperiam ex facere vitae dicta excepturi magni, veniam iure voluptatum officiis odit sapiente vel mollitia, earum sint repellendus temporibus aliquid nisi sit aliquam voluptas ducimus officia! Laborum rerum eum ipsa reprehenderit veritatis consequatur adipisci?
                </p>
                <ul>
                    <li class="nav-item">
                        Lorem ipsum dolor sit amet consectetur adipisicing.
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        Lorem, ipsum dolor.
                    </li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur voluptates totam deleniti in ducimus sequi aspernatur quas! Fugiat perspiciatis reprehenderit, esse, repudiandae at similique quod dolorem aperiam eveniet deserunt magnam modi quia optio alias eos autem quo aut blanditiis porro amet minima eum? Delectus itaque praesentium ullam nisi reprehenderit consequatur ad facilis reiciendis iste, distinctio voluptas aperiam perferendis laboriosam dignissimos quibusdam! Quia, quod provident doloremque amet vero nulla similique perspiciatis porro dicta aspernatur quae corporis at saepe placeat magnam quo neque omnis dolore sint veritatis. Quaerat deleniti voluptate dolore veritatis illum iusto enim placeat, cupiditate delectus atque velit alias voluptatibus, libero, modi excepturi? At inventore saepe tenetur nisi doloremque voluptatum architecto, repellat illum provident atque dolorum quam unde veritatis nam in autem. Voluptatum molestias porro impedit ipsam assumenda sapiente repudiandae, quos, quod, eligendi veniam magni illo dignissimos tempora tenetur delectus magnam quaerat. Culpa laboriosam magnam deserunt delectus fuga obcaecati excepturi perspiciatis optio dolore adipisci, quam aperiam quis similique rerum asperiores fugiat enim magni architecto, non necessitatibus repellat natus quae nostrum. Corporis assumenda debitis quidem sequi nostrum suscipit omnis cupiditate sed, aperiam ad deleniti mollitia praesentium molestiae labore aliquid doloremque vitae repellat id perspiciatis ipsam odio. Corporis debitis inventore at minus itaque unde tempora, quia accusamus maxime facilis obcaecati dolor. Sequi modi rem error odio culpa expedita dolores quasi quisquam est quia quam in iure vel tempora dolor incidunt reprehenderit, architecto consectetur!</p>
                <button type="button" class="btn btn-outline-light">Сохранить к себе</button>
            </div>
        </div>
        
        <h3 class="mb-5">Смотрите также:</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="./img/1.jpg" class="rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h4>Название рецепта</h4>
                        <p class="card-text">Описание рецепта</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/formula"><button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button></a>
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
                                <a href="/formula"><button type="button" class="btn btn-sm btn-outline-secondary ">Читать</button></a>
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
    Рецепт
@endsection
