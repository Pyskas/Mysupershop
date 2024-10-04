@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
    <div class="container">
<ul class="breadcrumbs_list">
    <li class="breadcrumbs_item"><a href="#" class="breadcrumbs_el"><img src="{{ asset('images\home.png') }}" alt="">
Главная
</a>
</li>
<li class="breadcrumbs_item"><a href="#" class="breadcrumbs_el">Торты</a>
</li>
<li class="breadcrumbs_item">
    <span class="breadcrumbs_el">{{ $product->title }}</span>
</li>
</ul>
</div>
</div>

<div class="container">
<h1 class="page-title">{{ $product->title }}</h1>
</div>


<div class="page-product">
    <div class="page-product-wrap">
    <div class="container">
        <div class="page-product-gallery">
<div class="page-product-gallery_thumbs">
<div class="page-product-gallery_thumbs_item active">
<img src="{{ asset('images\realcake.png') }}" alt="">
</div>
<div class="page-product-gallery_thumbs_item">
<img src="{{ asset('images\realcake.png') }}" alt="">
</div>
<div class="page-product-gallery_thumbs_item">
<img src="{{ asset('images\realcake.png') }}" alt="">
</div>
</div>
<div class="page-product-gallery_main">
<img src="{{ asset('images\realcake.png') }}" alt="">
</div>
        </div>
        <div class="page-product-main">
<div class="page-product-main-top">
<div class="page-product-main-top_reviews">
    <div class="page-product-main-top_rating">
<div class="page-product-main-top_rating_icon">
            <img src="{{ asset('images\rating.png') }}" alt="">
            </div>
            <span class="page-product-main-top_rating_text">4.7</span>
            </div>
            <div class="page-product-main-top_link">12 отзывов</div>
</div>
<div class="page-product-main-top_actions">
<div class="page-product-main-top_actions_compare">
            <img src="{{ asset('images\compare.png') }}" alt="">
            </div>
            <div class="page-product-main-top_actions_like">
            <img src="{{ asset('images\like.png') }}" alt="">
            </div>
</div>
</div>
<div class="page-product-main-options">
 <span class="page-product-main-options_title">Глазурь</span>
 <div class="page-product-main-options_items">
    <div class="page-product-main-options_item active">
    <img src="{{ asset('images\color1.png') }}" alt="">
    </div>
    <div class="page-product-main-options_item">
    <img src="{{ asset('images\color2.png') }}" alt="">
    </div>
    <div class="page-product-main-options_item">
    <img src="{{ asset('images\color3.png') }}" alt="">
    </div>
    <div class="page-product-main-options_item">
    <img src="{{ asset('images\color4.png') }}" alt="">
    </div>
 </div>
</div>
<div class="page-product-main-dop">
        <span class="page-product-main-dop_title">Другие</span>

</div>
<div class="page-product-main-action">
    <div class="page-product-main-action_price">
    <div class="page-product-main-action_price_main">
            <span class="page-product-main-action_price_old">900 Р</span>
            <span class="page-product-main-action_price_current">600 Р</span>
            </div>
            <div class="page-product-main-action_price_sale">
                <div class="page-product-main-action_price_sale-count">-20%</div>
            </div>
    </div>
    <div class="page-product-main-action_wrap">
    <div class="page-product-main-action_count">
    <span class="page-product-main-action_count_minus">-</span>
        <input type="text" name="count" value="1">
        <span class="page-product-main-action_count_plus">+</span>
    </div>
    <button class="page-product-main-action_buy">
        <div class="page-product-main-action_buy_icon"><img src="{{ asset('images\cart.png') }}" alt=""></div>
        <span class="page-product-main-action_buy_text">В корзину</span>
    </button>
    <a href="#" class="page-product-main-action_fast-buy">Купить в 1 клик</a>
    </div>
</div>
<div class="page-product-main-bottom">
        <span class="page-product-main-bottom_title">Способы получения</span>
        <div class="page-product-main-bottom_items">
            <span class="page-product-main-bottom_item"><a href="#" class="">Самовывоз</a> через 30 мин,бесплатно</span>
            <span class="page-product-main-bottom_item"><a href="#" class="">Доставка</a> в течении 1-3 дней</span>
        </div>
        </div>
</div>
        </div>


        <div class="container">
<div class="page-product-info">
            <div class="page-product-info_tabs">
                <a href="#" class="page-product-info_tabs_item">Описание товара</a>
                <a href="#" class="page-product-info_tabs_item">Отзывы о товаре</a>
                <a href="#" class="page-product-info_tabs_item">Доставка</a>
                <a href="#" class="page-product-info_tabs_item">Упаковка</a>
                <a href="#" class="page-product-info_tabs_item">Оплата</a>
                <a href="#" class="page-product-info_tabs_item">Гарантия</a>
            </div>
            <div class="page-product-info_cont">
                <p>Шоколадный торт — насыщенный и влажный, с шоколадным кремом или ганашем.</p>
            </div>
        </div>  
        </div>
        
    </div>

    <div class="ms-tags">
    <div class="container">
    <a href="#" class="ms-tags_item">С ягодами</a>
    <a href="#" class="ms-tags_item">С вареньем</a>
    <a href="#" class="ms-tags_item">Шоколадные</a>
    <a href="#" class="ms-tags_item">Импортные</a>
    <a href="#" class="ms-tags_item">Местные</a>
    <a href="#" class="ms-tags_item">Турецкие</a>
    </div>
</div>

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

</div>



@endsection

@section('script')
<script>
    $(document).ready(function(){
       
    })
</script>
@endsection