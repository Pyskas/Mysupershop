@extends('layouts.main')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs_list">
                <li class="breadcrumbs_item">
                <a href="#" class="breadcrumbs_el">
                    Главная
                </a>
                </li>
                <li class="breadcrumbs_item">
                    <span class="breadcrumbs_el">Спасибо за заказ</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1 class="page-title">Ваш заказ №32132</h1>
    </div>

    <div class="page-thanks">
        <div class="container">
            <p>Спасибо за заказ</p>
        </div>
    </div>

    @endsection

    @section('scripts')
        <script>
            $(document).ready(function() {

            })
        </script>
    @endsection