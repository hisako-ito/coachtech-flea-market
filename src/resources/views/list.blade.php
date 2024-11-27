@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css')}}">
@endsection

@section('content')
    <div class="group-list">
        <span class="group-list_item group-list__item--recommend" tabindex="-1">おすすめ</span>
        <span class="group-list_item group-list__item--favorite" tabindex="-1">マイリスト</span>
    </div>

    <div class="items-list">
            <div class="item-card">商品画像
                <div class="card__content">商品名</div>
            </div>
    </div>

@endsection