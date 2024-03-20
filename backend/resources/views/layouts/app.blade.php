<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
          rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/mobile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.min.css') }}">
</head>
<body>
    <div id="app">
    <div class="container">
        <div class="header">
            <div class="col-3">
                <img class="float-start" src="{{ asset('images/icon.png') }}" alt="AIRSOFT" width="100px" />
            </div>
            <form class="col-lg-6 col-12 d-flex search-form" action="index.html" method="get">
                <div class="col-10 d-flex brd">
                    <div class="col p-0">
                        <select class="search-type" name="search_type">
                            <option value="0" selected>Все категории</option>
                            <option value="1">Основное</option>
                            <option value="2">Расходники</option>
                            <option value="3">Одежда</option>
                            <option value="4">....</option>
                        </select>
                    </div>
                    <div class="col-8 p-0">
                        <input type="text" name="search_input" class="search-input" required
                               placeholder="Введите, что вы хотите найти" />
                    </div>
                </div>
                <div class="col p-0">
                    <button type="submit" class="search-button">Найти</button>
                </div>
            </form>
            <div class="col-3">
                <div class="header-icons float-end">
                    <a class="shop-basket" href="#">
                        <i class="fa fa-shopping-basket shop-basket_icon"></i>
                        <div class="shop-basket__count"><span>3</span></div>
                    </a>
                    @guest
                    <!--Auth-->
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i></a>
                        @endif
                    @else
                    <!--Profile IN DEV --UPDATE -->
                        @if (Route::has('home'))
                            <a href="{{ route('home') }}"><i class="fa fa-user"></i></a>
                        @endif
                    @endguest
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="fa fa-bars for-phone" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
						    <h5>Меню</h5>
                        </li>
						<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
							<hr class="hr hr-blurry m-0" />
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Категории
                            </a>
							<hr class="hr hr-blurry m-0" />
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Основное</a></li>
                                <li><a class="dropdown-item" href="#">Расходники</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Одежда</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Новинки</a>
							<hr class="hr hr-blurry m-0" />
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
							<hr class="hr hr-blurry m-0" />
                        </li>
						<li class="nav-item my-4 phone-menu__icon">
                            
                            <a class="circle-link" href="#"><i class="fa fa-shopping-basket"></i></a>
                            <a class="circle-link" href="#"><i class="fa fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="category-pc">
        <div class="container p-1">
            <div class="row align-items-center">
                <ul class="d-flex m-0" style="list-style-type:none;">
                    <li>
                        <a href="#" class="btn text-white">
                            Главная
                        </a>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Категории
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Основное</a></li>
                                <li><a class="dropdown-item" href="#">Расходники</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Одежда</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="*" class="btn text-white">
                            Новинки
                        </a>
                    </li>
                    <li>
                        <a href="*" class="btn text-white">
                            Контакты
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main class="py-4">
            @yield('content')
    </main>
    
    
    <div class="bottom py-5 container">
        <div class="bottom-item">
            <img class="float-start" src="images/icon.png" alt="AIRSOFT" width="100px" />
            <span>Магазин страйбольной тематики. Найдем все что интересует!</span>
            <div>
                <span class="bottom-feedback">Адрес:</span>
                <span>Росcийская Федерация, Ростовская Область,</br>г. Шахты, ул. Советская, д. 1.</span>
            </div>
            <div>
                <span class="bottom-feedback">Для связи:</span>
                <a href="tel:+79281945522">8 (928) 194 55 22</a>
            </div> 
            <div>
                <span class="bottom-feedback">Для связи:</span>
                <a  href="mailto:+support@airsoft.ru&body=AirSoft_Site">support@airsoft.ru</a>
            </div>
        </div>
        <div class="bottom-item">
            <span class="fw-bold">Продукты</span>
            <a href="#">Показать цены</a>
            <a href="#">Новые продукты</a>
            <a href="#">Лучше цены</a>
            <a href="#">Свзяться</a>
            <a href="#">Карта сайта</a>
            <a href="#">Авторизация</a>
        </div>
        <div class="bottom-item">
            <span class="fw-bold">О компании</span>
            <a href="#">Доставка</a>
            <a href="#">Документы</a>
            <a href="#">О нас</a>
            <a href="#">Безопасность оплаты</a>
            <a href="#" target="_blank">Карта сайта</a>
            <a href="#">Магазин</a>
        </div>
        <div class="bottom-item  bottom-space">
            <div class="bottom-item">
                <span class="fw-bold">Подписаться</span>
                <span class="sosial-block">
                    <a class="social-icons" href="#"><i class="fa fa-vk"></i></a>
                    <a class="social-icons" href="#"><i class="fa fa-instagram"></i></a>
                    <a class="social-icons" href="#"><i class="fa fa-youtube"></i></a>
                    <a class="social-icons" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="social-icons" href="#"><i class="fa fa-instagram"></i></a>
                </span>
            </div>
            <div class="bottom-item">
                <span class="fw-bold">Получать новости</span>
                <form class="search-form" action="#" method="post">
                   <div class="d-flex">
                        <div class="col-8 p-0">
                           <input type="email" name="email_get_news" class="email_get_news" required
                                  placeholder="Введите ваш email" />
                        </div>
                        <div class="col p-0">
                            <button type="submit" class="search-button">Отправить</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
    <div class="coppyryte-box py-4">
        <span>Coppirate <a href="#MPZ">MPZ</a>. All Rights Reserved</span>
    </div>

    

<!-- Authentication Links -->
@guest
@if (Route::has('login'))
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@endif

@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
{{ Auth::user()->name }}

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
@endguest


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="plugins/jquery-3.7.1.min.js"></script>
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
