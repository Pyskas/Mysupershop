@extends('layouts.main')

@section('content')

<header class="header">
<div class="swiper header-carousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide header-carousel_skude" style="background-image: url('{{ asset('images/banner1.jpg') }}')">
        <div class="header-carousel_slide .container">
    <div class="container">
    <h3 class="header-carousel_title">Бери больше <br> плати меньше</h3>
    <div class="header-carousel_desc">
        <p>При покупке <span class="bold">одного и более</span> товаров скидка на последующие - <span class="bold">500 p</span></p>
    </div>
    <a href="#" class="btn-border">Подробнее</a>
  </div>
  </div>
  </div>
  <div class="swiper-slide header-carousel_slide" style="background-image: url('{{ asset('images/banner2.jpg') }}')">
    <div class="container">
        <h3 class="header-carousel_title">Торт в <br> мультяшном <br> стиле со скидкой 50%</h3>
        <div class="header-carousel_desc">
            <p>До 26 октября</p>
</div>
<a href="#" class="btn-border">Подробнее</a>
</div>
</div>
  </div>
  <div class="header-carousel-pagination-wrap">
    <div class="container">
    <div class="header-carousel-pagination"></div>
    </div>
</div>
</div>
    </header>

<section class="categories">
<div class="container">
    <h2 class="categories_title">Более 2 000 сладостей ждут вас</h2>
    <span class="categories_desc">интернет магазин который поможет вам в любые праздники и по любым поводам отведать сладкого в приятные моменты в жизни</span>
    <div class="categories_items">


    @foreach($categories as $cat) 
    <a href="{{ route('catalog', $cat->hash) }}" class="categories_item">
            <div class="categories_item_icon">
            <img src="{{ asset($cat->icon) }}" alt="">
            </div>
            <h4 class="categories_item_title">{{ $cat->title }}</h4>
            <div class="categories_item_count">60</div>
        </a>
    @endforeach
        
    </div>
</div>
</section>
<section class="adv">
    <div class="container">
        <div class="adv_item">
            <div class="adv_item_icon">
            <img src="{{ asset('images\sale.png') }}" alt="">
            </div>
            <span class="adv_item_title">Выгодные акции и честные скидки</span>
        </div>
        <div class="adv_item">
            <div class="adv_item_icon">
            <img src="{{ asset('images\sertife.png') }}" alt="">
            </div>
            <span class="adv_item_title">Сертифицированная продукция</span>
    </div>
    <div class="adv_item">
            <div class="adv_item_icon">
            <img src="{{ asset('images\assortiment.png') }}" alt="">
            </div>
            <span class="adv_item_title">Широкий ассортимент</span>
    </div>
    <div class="adv_item">
            <div class="adv_item_icon">
            <img src="{{ asset('images\deliver.png') }}" alt="">
            </div>
            <span class="adv_item_title">Быстрая и удобная доставка в срок</span>
    </div>
</div>
</section>
<section class="sale">
    <div class="container">
        <h3 class="sale_title">Специальные предложения</h3>
        <div class="swiper sale-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide mini-product">
                    <div class="mini-product_top">
                    <span class="mini-product_stock">4 шт</span>
                    <div class="mini-product_action">
                        <div class="mini-product_compare">
                        <img src="{{ asset('images\compare.png') }}" alt="">
                        </div>
                        <div class="mini-product_like">
                        <img src="{{ asset('images\like.png') }}" alt="">
                        </div>
                    </div>
                    </div>
                    <a href="#" class="mini-product_img">
                    <img src="{{ asset('images\realcake.png') }}" alt="">
                    </a>
                    <a href="#" class="mini-product_title">Торт Негр в Пене 600 рублей/шоколад ваниль</a>
                    <div class="mini-product_rating">
                        <div class="mini-product_rating_icon">
                        <img src="{{ asset('images\rating.png') }}" alt="">
                        </div>
                        <span class="mini-product_rating_text">4.7</span>
                    </div>
                    <div class="mini-product_price">
                        <div class="mini-product_price_main">
                        <span class="mini-product_price_old">900 Р</span>
                        <span class="mini-product_price_current">600 Р</span>
                        </div>
                        <div class="mini-product_price_sale">
                            <div class="mini-product_price_sale-count">-20%</div>
                        </div>
                    </div>
                    <div class="mini-product_buy">
                    <img src="{{ asset('images\cart.png') }}" alt="">
                    </div>
                </div>
            </div>

            
            <div class="swiper-pagination swiper__pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<section class="info">
    <div class="container">
        <div class="info_desc">
            <p>Сладости от Вани — это любовь с первого укуса!</p>
            <p>© 2024 Все права защищены.  
Доставка по городу и индивидуальные заказы.  
Свяжитесь с нами</p>
<a href="#" class="info_link">Подробнее</a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
<script>
//      const header_carousel = new Swiper('.header-carousel', {
//         loop:true,
//   pagination: {
//     el: '.header-carousel-pagination',
//     clickable: true,
//   },
// });

// const sale_carousel = new Swiper('.sale-carousel', {
//         // loop:true,
//         // slidesPerView: 5,
//         // spaceBetween:0,
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         // clickable: true,
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//   },
// );

</script>
@endsection
