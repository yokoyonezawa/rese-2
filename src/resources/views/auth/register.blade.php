@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('content')
<div class="content">
    <div class="register__ttl">Registration</div>
    <form action="/register" method="post">
        @csrf
        <div class="register__content">
            name<input type="text" name="name" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="register_content">
            Email<input type="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="register__content">
            Password<input type="password" name="password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="btn-container">
            <input type="submit" value="登録">
        </div>
    </form>
</div>
@endsection