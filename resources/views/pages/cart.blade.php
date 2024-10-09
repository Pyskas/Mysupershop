@extends('layouts.main')

@section('content')

<div class="breadcrumbs">
    <div class="container">
<ul class="breadcrumbs_list">
    <li class="breadcrumbs_item"><a href="#" class="breadcrumbs_el"><img src="{{ asset('images\home.png') }}" alt="">
Главная
</a>
</li>
<li class="breadcrumbs_item">
    <span class="breadcrumbs_el">Оформление заказа</span>
</li>
</ul>
</div>
</div>

<div class="container">
<h1 class="page-title">Оформление заказа</h1>
</div>

<div class="page-cart">
    <div class="container">
        <div class="page-cart-main">
            <div class="page-cart-product-list">
                
               
            </div>
            <div class="pcart-main-contact">
                <span class="pcart-main-contact_title">1.Контактная информация</span>
                <div class="pcart-main-contact_input-wrap">
                    <input type="text" name="name" placeholder="ФИО">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="pcart-main-contact_input-wrap">
                <input type="text" name="phone" placeholder="Телефон">
</div>
            </div>
            <div class="pcart-main-delivery">
                <span class="pcart-main-delivery_title">2.Способ получения заказа</span>
                <div class="pcart-main-delivery_items">
                    <label class="pcart-main-delivery_item">
                        <input type="radio" name="1">
                        <div class="pcart-main-delivery_item_box"></div>
                        <div class="pcart-main-delivery_item_info">
                            <span class="pcart-main-delivery_item_title">Доставка в пункт выдачи</span>
                            <span class="pcart-main-delivery_item_desc">Срок и стоймость уточняйте у продавца</span>
                        </div>
                    </label>
                    <label class="pcart-main-delivery_item">
                        <input type="radio" name="1">
                        <div class="pcart-main-delivery_item_box"></div>
                        <div class="pcart-main-delivery_item_info">
                            <span class="pcart-main-delivery_item_title">Самовывоз</span>
                            <span class="pcart-main-delivery_item_desc">Доступен в городе Уфа, график работы уточняйте у продавца</span>
                        </div>
                    </label>
                </div>
            </div>
            <div class="pcart-main-comment">
                <span class="pcart-main-comment_title">3.Комментарий</span>
                <textarea name="comment" placeholder="Комментарий к заказу" class="pcart-main-comment_textarea"></textarea>
            </div>
        </div>
        <div class="pcart-main-order">
<div class="pcart-main-order-promo">
    <input type="text" name="promocode" class="pcart-main-order-promo_input" placeholder="Промокод">
    <button class="pcart-main-order-promo_btn">Применить</button>
</div>
<span class="pcart-main-order_title">Ваш заказ</span>

<div class="pcart-main-order_info">
<div class="pcart-main-order_info-item">
<div class="pcart-main-order_info-item_title">Всего товаров</div>
<div class="pcart-main-order_info-item_sep">......</div>
<div class="pcart-main-order_info-item_val">4 шт</div>
</div>
<div class="pcart-main-order_info-item">
<div class="pcart-main-order_info-item_title">Сумма заказа</div>
<div class="pcart-main-order_info-item_sep">.......</div>
<div class="pcart-main-order_info-item_val">1 200 Р</div>
</div>
<div class="pcart-main-order_info-item">
<div class="pcart-main-order_info-item_title">К оплате</div>
<div class="pcart-main-order_info-item_sep">...............</div>
<div class="pcart-main-order_info-item_val result">1 200 Р</div>
</div>
<div class="pcart-main-order_buy-wrap">
<button class="pcart-main-order_buy">Оформить заказ</button>
</div>
</div>


        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function(){
        let cart = JSON.parse(localStorage.getItem('cart'))

        let output = ``
        cart.forEach(item => {
            
        })

        $('.page-cart-product-list').html(`
                <div class="page-cart-product-list-item">
                    <div class="page-cart-product-list-item_info-wrap">
                    <div class="page-cart-product-list-item_img">
                    <img src="{{ asset('images/realcake.png') }}" alt="">
                    </div>
                    <div class="page-cart-product-list-item_info">
                        <a href="#" class="page-cart-product-list-item_title">Торт "Каталонский Англицизм"</a>
                        <div class="page-cart-product-list-item_options">
                            <span>шоколадный</span>
                            <span>144x123x123</span>
                        </div>
                    </div>
                    </div>
                    <div class="page-cart-product-list-item_count">
    <span class="page-cart-product-list-item_count_minus">-</span>
        <input type="text" name="count" value="1">
        <span class="page-cart-product-list-item_count_plus">+</span>
    </div>
    <div class="page-cart-product-list-item_price">600 P</div>
    <div class="page-cart-product-list-item_remove">
    <img src="{{ asset('images/cart-remove.png') }}" alt="">
    </div>
                </div>
        `)
    })
</script>
@endsection