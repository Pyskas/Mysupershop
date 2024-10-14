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
<div class="pcart-main-order_info-item result-products-count">
<div class="pcart-main-order_info-item_title">Всего товаров</div>
<div class="pcart-main-order_info-item_sep">......</div>
<div class="pcart-main-order_info-item_val"><span class="num">0</span> шт</div>
</div>
<div class="pcart-main-order_info-item result-products-sum">
<div class="pcart-main-order_info-item_title">Сумма заказа</div>
<div class="pcart-main-order_info-item_sep">.......</div>
<div class="pcart-main-order_info-item_val"><span class="num">0</span> Р</div>
</div>
<div class="pcart-main-order_info-item result-products-itog">
<div class="pcart-main-order_info-item_title">К оплате</div>
<div class="pcart-main-order_info-item_sep">...............</div>
<div class="pcart-main-order_info-item_val result"><span class="num">0</span>Р</div>
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

        let calculate_result_sum = function(cart){
        if(cart != null){
            let result = 0;

            cart.forEach(item => {
                result += item.product_price * item.count
            })
            return result
        }
    }

        let cart = JSON.parse(localStorage.getItem('cart'))

        let output = ``

        cart.forEach(item => {
            output += `
            <div class="page-cart-product-list-item">
            <input type="hidden" name="product_id" value="${item.product_id}">
                    <div class="page-cart-product-list-item_info-wrap">
                    <div class="page-cart-product-list-item_img">
                    <img src="${item.product_img}" alt="">
                    </div>
                    <div class="page-cart-product-list-item_info">
                        <a href="#" class="page-cart-product-list-item_title">${item.product_title}</a>
                        <div class="page-cart-product-list-item_options">
                            <span>шоколадный</span>
                            <span>144x123x123</span>
                        </div>
                    </div>
                    </div>
                    <div class="page-cart-product-list-item_count">
    <span class="page-cart-product-list-item_count_minus">-</span>
        <input type="text" name="count" value="${item.count}">
        <span class="page-cart-product-list-item_count_plus">+</span>
    </div>
    <div class="page-cart-product-list-item_price">${item.product_price}</div>
    <div class="page-cart-product-list-item_remove">
    <img src="{{ asset('images/cart-remove.png') }}" alt="">
    </div>
                </div>
            `
        })

        $('.page-cart-product-list').html(output)

        $('.result-products-count .pcart-main-order_info-item_val .num').text(cart.length)
        $('.result-products-sum .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))
        $('.result-products-itog .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))

        $(document).on('click', '.page-cart-product-list-item_remove', function(){
            let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
            let cart = JSON.parse(localStorage.getItem('cart'))

            $(this).parents('.page-cart-product-list-item').remove()

            cart = cart.filter(item =>{
                if(item.product_id != id){
                    return item
                }
            })

            $('.ml-action_cart_count').text(cart.length)
            $('.result-products-count .pcart-main-order_info-item_val .num').text(cart.length)
        $('.result-products-sum .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))
        $('.result-products-itog .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))

            localStorage.setItem('cart',JSON.stringify(cart))
        })

        $(document).on('click', '.page-cart-product-list-item_count_plus', function(){
            let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
            let count = $(this).siblings('input[name="count"]').val()
            let cart = JSON.parse(localStorage.getItem('cart'))

            $(this).siblings('input[name="count"]').val(Number(count)+1)
             cart.map(item =>{
                if(item.product_id == id){
                    return item.count += 1
                }
            })

            $('.result-products-count .pcart-main-order_info-item_val .num').text(cart.length)
        $('.result-products-sum .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))
        $('.result-products-itog .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))

            localStorage.setItem('cart',JSON.stringify(cart))
        })
        $(document).on('click', '.page-cart-product-list-item_count_minus', function(){
            let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
            let count = $(this).siblings('input[name="count"]').val()
            let cart = JSON.parse(localStorage.getItem('cart'))
            if(count > 1){
                $(this).siblings('input[name="count"]').val(Number(count)-1)
                cart.map(item =>{
                if(item.product_id == id){
                    return item.count -= 1
                }
            })

            $('.result-products-count .pcart-main-order_info-item_val .num').text(cart.length)
        $('.result-products-sum .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))
        $('.result-products-itog .pcart-main-order_info-item_val .num').text(calculate_result_sum(cart))

            localStorage.setItem('cart',JSON.stringify(cart))
            }
           
        })
        
    })

</script>
@endsection