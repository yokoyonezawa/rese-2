@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">

@section('content')

<div class="shop__content">
    <div class="shop__name">
        <button type="button" onClick="history.back()">戻る</button>
        <h2>{{ $shop->name }}</h2>
    </div>
    <div class="shop__img">
        <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}" />
    </div>
    <div class="shop__area">{{ $shop->area->name }}</div>
    <div class="shop_genre">{{ $shop->genre->name }}</div>
    <div class="shop__overview">{{ $shop->detail }}</div>
</div>
<div class="shop__content">
    <form action="/done" method="post">
        @csrf
        <input type="hidden" name="shop_id" value="{{ $shop->id }}">
        <div class="reservation__content">
            <div class="date">
                <input type="date" name="date" min="{{ $today }}" value="{{ $today }}">
            </div>
            <div class="time">
                <select name="time">
                    <option value="17:00">17:00</option>
                    <option value="17:15">17:15</option>
                    <option value="17:30">17:30</option>
                    <option value="17:45">17:45</option>
                    <option value="18:00">18:00</option>
                    <option value="18:15">18:15</option>
                    <option value="18:30">18:30</option>
                    <option value="18:45">18:45</option>
                    <option value="19:00">19:00</option>
                    <option value="19:15">19:15</option>
                    <option value="19:30">19:30</option>
                    <option value="19:45">19:45</option>
                    <option value="20:00">20:00</option>
                    <option value="20:15">20:15</option>
                    <option value="20:30">20:30</option>
                    <option value="20:45">20:45</option>
                    <option value="21:00">21:00</option>
                </select>
            </div>
            <div class="number">
                <label for="number"></label>
                    <select id="number" name="number">
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="5">5人</option>
                        <option value="6">6人</option>
                        <option value="7">7人</option>
                        <option value="8">8人</option>
                        <option value="9">9人</option>
                        <option value="10">10人</option>
                    </select>
            </div>
            <div class="reservation__btn">
                <button type="submit" name="reservation">予約する</button>
            </div>
        </div>
    </form>
</div>

@endsection