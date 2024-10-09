<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myshop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz@400;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-ui-slidar@1.12.1/jquery-ui.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/app.css') }}">
</head>
<body>
    <div class="top-line">
        <div class="container">
            <div class="top-line_main flex-center">
            <div class="select-city flex-center">
                <span class="select-city_text">Уфа</span>
                <div class="select-city_text">
                <img src="{{ asset('images\city.png') }}" alt="">
                </div>
            </div>
            <div class="pick-up-point flex-center">
            <div class="pic-up-point_icon">
                <img src="{{ asset('images\geolock.png') }}" alt="">
                </div>
                <span class="pick-up-point_text">Магазин</span>
            </div>
            <div class="top-line-time flex-center">
              <span class="top-line-time_text">  Пн-Пт с <span>9:00 до 17:00</span></span>
            </div>
            </div>
            <div class="user-account flex-center">
                <div class="user-account_icon">
                <img src="{{ asset('images\account.png') }}" alt="">
                </div>
                <span class="user-account_text">Личный кабинет</span>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-line">
        <div class="container flex-center">
            <a class="ml-logo" href="/">
                <img src="{{ asset('images\logo.png') }}" alt="">
            </a>
            <form class="fast-search">
                <div class="fast-search_input">
                <input type="text" name="v" placeholder="Поиск изделий...">
<div class="fast-search_icon">
<img src="{{ asset('images\search.png') }}" alt="">
</div>
                </div>
                <span class="fast-search_example">Например Торты,пирожные,коктейли</span>
            </form>
            <div class="ml-callback">
                <a href="tel:+7(937)850-33-51" class="ml-callback_phone">+7(937)850-33-51</a>
                <a href="#" class="ml-callback_call">Заказать звонок</a>
            </div>
            <div class="ml-action flex-center">
                <div class="ml-action_compare">
                <div class="ml-action_compare_icon">
                <img src="{{ asset('images\compare.png') }}" alt="">
                </div>
                </div>
                <div class="ml-action_like">
                <div class="ml-action_like_icon">
                <img src="{{ asset('images\like.png') }}" alt="">
                </div>
                </div>
                <a href="{{ route('cart') }}" class="ml-action_cart">
                    <span class="ml-action_cart_count">0</span>
                    <div class="ml-action_cart_icon">
                <img src="{{ asset('images\cart.png') }}" alt="">
                </div>
                <div class="ml-action_cart_text">Корзина</div>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="container">
        <div class="list-cat">
            <div class="list-cat_main flex-center">
            <div class="list-cat_main_icon">
            <img src="{{ asset('images\menu.png') }}" alt="">
            </div>
            <span class="list-cat_main_text">Все категории</span>
            </div>
            <div class="list-cat_drop">
                <ul class="list-cat_list">
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">Торты</a></li>
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">Для детей</a></li>
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">На праздники</a></li>
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">Пирожные</a></li>
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">Для взрослых</a></li>
                    <li class="list-cat_list_item"><a class="list-cat_list_link" href="#">Шарики</a></li>
                </ul>
            </div>
        </div>
        <ul class="main-menu_list">
            <li class="main-menu_item"><a href="" class="main-menu_link">Акции</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">О магазине</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">Оплата</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">Производители</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">Готовка</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">Доставка</a></li>
            <li class="main-menu_item"><a href="" class="main-menu_link">Контакты</a></li>
        </ul>
        </div>
    </nav>

@yield('content')



@include('partials.footer')


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
     const header_carousel = new Swiper('.header-carousel', {
        loop:true,
  pagination: {
    el: '.header-carousel-pagination',
    clickable: true,
  },
});

const sale_carousel = new Swiper('.sale-carousel', {
        loop:true,
        slidesPerView: 5,
        spaceBetween:0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
  },
);

    </script>
   
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function(){
        if(window.location.pathname != '/'){
        $('.list-cat_drop').hide()
    }

    let cart = JSON.parse(localStorage.getItem('cart'))

    $('.ml-action_cart_count').text(cart.length)

    })
    

</script>

@yield('script')

</body>
</html>