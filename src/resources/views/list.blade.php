@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css')}}">
@endsection

@section('nav')
    <form class="header-utilities__search-form" action="/search" method="get">
    @csrf
        <input class="header-utilities__keyword-input" type="text" name="keyword" placeholder="なにをお探しですか？" value="{{request('keyword')}}">
    </form>
    <div class="header-utilities__actions">
        <a href="/login" class="header-utilities__login-btn">ログイン</
        </a>
        <a href="/mypage" class="header-utilities__mypage-btn">マイページ</a>
        <form action="/sell" method="get"> <input type="submit" class="header-utilities__sell-btn" value="出品">
        </form>
    </div>

@endsection

@section('content')

@endsection