@extends('layouts.app')
 
@section('title', 'Laravel 10 Login Register with Tailwind CSS and DaisyUI | Custom Login register')
 
@section('content')
<div style="background: url('{{ asset('img/login.png') }}') no-repeat center center; background-size: cover;">
    <div class="hero min-h-screen" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        {{--  <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Selamat Datang</h1>
                <p class="mb-5">Dihalaman admin puskesmas</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>  --}}
    </div>
</div>
@endsection