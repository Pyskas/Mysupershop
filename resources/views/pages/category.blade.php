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
    <span class="breadcrumbs_el">Торты</span>
</li>
</ul>
</div>
</div>

<div class="container">
<h1 class="page-title">Торты и кексы</h1>
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

<div class="page-category">
    <div class="container">
        <div class="pc-filter">
            <div class="pc-filter_top">
                <span class="pc-filter_title">Фильтр</span>
                <div class="pc-filter_icon">
                <img src="{{ asset('images\filter.png') }}" alt="">
                </div>
            </div>
            <div class="pc-filter-price">

    <div class="pc-filter-price_inputs">
        <input  type="text" id="filter-price-slider-from" class="pc-filter-price_input" name="price_from" placeholder="От 400">
        <input type="text" id="filter-price-slider-to" class="pc-filter-price_input" name="price_to" placeholder="До 7000">
    </div>
    <div id="filter-price-slider" class="pc-filter-price_slider">
        
    </div>
            </div>
            <div class="pc-filter_item">
                <div class="pc-filter-item_top">
                    <span class="pc-filter_item_title">Начинка</span>
                    <div class="pc-filter_item_icon">
                    <img src="{{ asset('images\filter-arrow.png') }}" alt="">
                    </div>
                </div>
                <div class="pc-filter-item_cont">
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsa">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">С ягодами</span>
                    </label>
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsaaa">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">С вареньем</span>
                    </label>
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsasd">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">Шоколадные</span>
                    </label>
                </div>
            </div>
            <div class="pc-filter_item">
                <div class="pc-filter-item_top">
                    <span class="pc-filter_item_title">Дополнения</span>
                    <div class="pc-filter_item_icon">
                    <img src="{{ asset('images\filter-arrow.png') }}" alt="">
                    </div>
                </div>
                <div class="pc-filter-item_cont">
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsa">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">Посыпка</span>
                    </label>
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsaaa">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">Глазурь</span>
                    </label>
                    <label class="pc-filter-checkbox">
                        <input class="pc-filter-checkbox_checkbox" type="checkbox" name="dsasd">
                        <div class="pc-filter-checkbox_box"></div>
                        <span class="pc-filter-checkbox_value">Шоколад</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="page-category_content">
            <div class="page-category_sort">
                <div class="pc-select">
                    <span class="pc-select_title">Сортировка:</span>
                    <span class="pc-select_val">По умолчанию</span>
                </div>
                <div class="pc-view">
                <img src="{{ asset('images\menu2.png') }}" alt="">
                <img src="{{ asset('images\grid.png') }}" alt="">
                </div>
            </div>
            <div class="page-category_products">
            <div class="mini-product">
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
    <div class="mini-product">
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
    <div class="mini-product">
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
    <div class="mini-product">
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
    <div class="mini-product">
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
    <div class="mini-product">
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
    
    <div class="mini-product">
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
    <div class="mini-product">
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
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function(){
        $('#filter-price-slider').slider({
            range:true,
            min: 0,
            max: 9000,
            values: ['0', '9000'],
            slide: function(event, ui) {
                $('#filter-price-slider-from').val(ui.values[0]);
                $('#filter-price-slider-to').val(ui.values[1]);
            }
        });
    })
</script>

@endsection