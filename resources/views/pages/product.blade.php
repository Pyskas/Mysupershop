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
    <span class="breadcrumbs_el">Торт "Каталонский Англицизм"</span>
</li>
</ul>
</div>
</div>

<div class="container">
<h1 class="page-title">Торт "Каталонский Англицизм"</h1>
</div>


<div class="page-product">
    <div class="container">
        <div class="page-product-gallery">
<div class="page-product-gallery_thumbs">
<div class="page-product-gallery_thumbs_item">
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

</div>
<div class="page-product-main-dop">

</div>
<div class="page-product-main-action">

</div>
<div class="page-product-main-bottom">

</div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function(){
       
    })
</script>
@endsection