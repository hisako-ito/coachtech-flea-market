@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css')}}">
@endsection

@section('content')
    <div class="detail-content">
        <div class="detail-content__inner">
            <div class="content__img">
                <div class="img__card">
                    <img src="{{ asset($item->image) }}"  alt="商品画像">
                </div>
            </div>
            <div class="content__form">
                <form class="form__purchase" action="/purchase/{item_id}" method ="post">
                @csrf
                    <h2 class="item-name">{{$item->name}}</h2>
                    <p class="item-brand-name">ブランド名</p>
                    <p class="item-price">{{ number_format($item->price) }}</p>
                    <div class="count-content">
                        <div class="like_count">
                            <button type="submit" class="like_btn"><img src="{{ asset('/images/星アイコン8.png') }}" class="img-like_icon"/>
                            <p class="like_count__number">カウント</p></button>
                        </div>
                        <div class="comment_count">
                            <img src="{{ asset('/images/ふきだしのアイコン.png') }}" class="img-comment_icon"/>
                            <p class="comment_count__number">カウント</p>
                        </div>
                    </div>
                    <button class="button-purchase btn" type="submit">購入手続きへ</button>
                </form>

                <h3 class="item-description">商品説明</h3>
                <p class="description__description">{{$item->description}}</p>
                <h3 class="item-information">商品の情報</h3>
                <h5 class="information__category">カテゴリー</h5>
                <h5 class="information__condition">商品の状態<span>{{ $item['condition']['content'] }}</span></h5>
                <h3 class="comment">コメント(カウント)</h3>
                <div class="comment-user">comment-user</div>
                <div class="comment-content">comment-content</div>
                <h4 class="item-comment">商品へのコメント</h4>
                <form class="comment__form" action="/item/{item_id}" method ="post">
                @csrf
                    <textarea class="comment__form_textarea" cols="90" rows="7"></textarea>
                    <button type="submit" class="button-comment btn">コメントを送信する</button>
                </form>
            </div>
        </div>
    </div>
@endsection