@extends('layouts.app')

@section('content')

<div class="promotion">
        <div class="owl-carousel promotion-slider" id="slider">
            <div class="item container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="fs-4 promotion-name">
                            Hi-Cappa</br>
                            <span class="fs-3 fw-bold">5.1 - block black</span>
                        </p>
                        <p class="fs-6">
                            Со скидкой <span class="promotion-count">30%</span>
                            в этом месяце
                        </p>
                        <button class="promotion-button">Купить</button>
                    </div>
                    <div class="col-6">
                        <img src="images/hi-cappa51.png" alt="" width="300px">
                    </div>
                </div>
            </div>
            <div class="item container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="fs-4 promotion-item__name">
                            Hi-Cappa</br>
                            <span class="fs-3 fw-bold">4.1 - block black</span>
                        </p>
                        <p class="fs-6">
                            Со скидкой <span class="promotion-count">45%</span>
                            в этом месяце
                        </p>
                        <button class="promotion-button">Купить</button>
                    </div>
                    <div class="col-6">
                        <img src="images/hi-cappa51.png" alt="" width="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-category">
        <div class="container p-3">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="top-category__detals">
                        <p class="fs-3 fw-bold">Лучше категории в этом месяце</p>
                        <p class="fs-6">По оценкам пользователей</p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="owl-carousel top-slider" id="top-slider">
                        <div class="item">
                            <div class="top-category_item">
                                <img src="images/hi-cappa51.png" />
                                <p class="m-0">Пистолеты</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top-category_item">
                                <img src="images/icon.png" />
                                <p class="m-0">Одежда</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top-category_item">
                                <img src="images/icon.png" />
                                <p class="m-0">Расходники</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top-category_item">
                                <img src="images/icon.png" />
                                <p class="m-0">Комуникации</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top-category_item">
                                <img src="images/icon.png" />
                                <p class="m-0">Защита</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-items">
        <div class="container py-5">
            <div class="col-12">
                <p class="fs-3">Новинки</p>
                <hr class="hr hr-blurry" />
            </div>
            <div class="col-12 py-3 new-items__conteiner">
                    <div class="col-lg-7 col-12 new-items__box py-5 px-2">
                        <div class="col-lg-6 col-12 new-items__img_parent">
                            <img class="new-items__img_image" src="images/hi-cappa51.png" alt="">
                            <div class="new-items__img_logonew"><span>New</span></div>
                        </div>
                        <div class="col-lg-6 col-12 new-items__detals">
                            <div><span class="price-old fw-bold">$20</span><span class="price-now fw-bold">$15</span></div>
                            <span>Пистолет Hi-Cappa</span>
                            <span>
                                <i class="fa fa-star-o item-good"></i>
                                <i class="fa fa-star-o item-good"></i>
                                <i class="fa fa-star-o item-good"></i>
                                <i class="fa fa-star-o item-good"></i>
                                <i class="fa fa-star-o item-nogood"></i>
                            </span>
                            <p class="text-secondary p-y3">Страйкбольная версия пистолета Hi-Capa 5.1 от фирмы Tokyo Marui, Япония.</br>Принцип действия пистолета: GBB.</br>Корпус пистолета выполнен из ударопрочного ABS-пластика, органы управления металлические. Пистолет работает на Green Gas, который заправляется в магазин. Количество выстрелов зависит от температуры и темпа стрельбы, но в среднем это 2 полных магазина.</p>
                            <button class="btn">Добавить в корзину</button>
                        </div>
                    </div>


                    <div class="new-items__gap20">
                        <div class="col-12 new-items__box py-5 px-2">
                            <div class="col-lg-6 col-12 new-items__img_parent">
                                <img class="new-items__img_image" src="images/hi-cappa51.png" alt="">
                                <div class="new-items__img_logonew"><span>New</span></div>
                            </div>
                            <div class="col-lg-6 col-12 new-items__detals">
                                <div><span class="price-now fw-bold">$15</span></div>
                                <span>Пистолет Hi-Cappa</span>
                                <span>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-nogood"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 new-items__box py-5 px-2">
                            <div class="col-lg-6 col-12 new-items__img_parent">
                                <img class="new-items__img_image" src="images/hi-cappa51.png" alt="">
                                <div class="new-items__img_logonew"><span>New</span></div>
                            </div>
                            <div class="col-lg-6 col-12 new-items__detals">
                                <div><span class="price-old fw-bold">$20</span><span class="price-now fw-bold">$15</span></div>
                                <span>Пистолет Hi-Cappa</span>
                                <span>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-good"></i>
                                    <i class="fa fa-star-o item-nogood"></i>
                                </span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
