@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
    <div class="container">
<ul class="breadcrumbs_list">
    <li class="breadcrumbs_item"><a href="/" class="breadcrumbs_el"><img src="{{ asset('images\home.png') }}" alt="">
Главная
</a>
</li>
<li class="breadcrumbs_item">
    <a href="{{ route('catalog', $product->category->hash) }}" class="breadcrumbs_el">{{ $product->category->title }}</a>
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

        @if($product->images->isNotEmpty())
<div class="page-product-gallery_thumbs">
<div class="page-product-gallery_thumbs_item active">
<img src="{{ asset($product->image_path) }}" alt="">
</div>
    @foreach($product->images as $img) 
<div class="page-product-gallery_thumbs_item">
<img src="{{ asset($img->path) }}" alt="">
</div>
@endforeach
</div>
@endif
<div class="page-product-gallery_main">
<img src="{{ asset($product->image_path) }}" alt="">
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

    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="product_title" value="{{ $product->title }}">
    <input type="hidden" name="product_price" value="{{ $product->price }}">
    <input type="hidden" name="product_img" value="{{ $product->image_path }}">
    <div class="page-product-main-action_price">
    <div class="page-product-main-action_price_main">
            <span class="page-product-main-action_price_old">900 Р</span>
            <span class="page-product-main-action_price_current">{{ $product->price }}</span>
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
            {{ $product->description }}
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
       $('.page-product-gallery_thumbs_item').on('click', function(){
        let path = $(this).find('img').attr('src')
        $('.page-product-gallery_main img').attr('src', path)
        $('.page-product-gallery_thumbs_item').removeClass('active')
        $(this).addClass('active')
       })

       $('.page-product-main-action_count_plus').on('click', function(){
            let count = $(this).siblings('input[name="count"]').val()

            $(this).siblings('input[name="count"]').val(Number(count)+1)
        })
        $('.page-product-main-action_count_minus').on('click', function(){
            let count = $(this).siblings('input[name="count"]').val()

            if(count > 1){
                $(this).siblings('input[name="count"]').val(Number(count)-1)
            }
        })

        $('.page-product-main-action_buy').on('click', function(){
            
            let id= $('input[name="product_id"]').val()
            let title= $('input[name="product_title"]').val()
            let price= $('input[name="product_price"]').val()
            let img_path= $('input[name="product_img"]').val()
            let count= $('input[name="count"]').val()

            let product = {
                product_id: id,
                product_title: title,
                product_img: img_path,
                product_price: price,
                count: count
            }

            let result;
            let cart = JSON.parse(localStorage.getItem('cart'))

            if (cart == null){
                result = [product]
            }else{
                let match = false
                cart.map(item => {
                    if (item.product_id == product.product_id){
                        match = true
                        return item.count = Number(item.count) + Number(product.count)
                    }
                })
                if (match){
                    result = cart
                } else{
                    result = [...cart, product]
                }
            }

            $('.ml-action_cart_count').text(result.length)

            localStorage.setItem('cart' , JSON.stringify(result))

        })

    })
</script>
@endsection