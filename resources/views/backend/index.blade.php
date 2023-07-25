@extends('layouts.backend.master')
@section('title')
    Dashboard Profil
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@yield('title')</h4>
                    </div>
                    <img src="{{ asset('assets/fe/img/Logo.png') }}" class="img-fluid shadow-sm"
                                    style="border-radius: 14px;" id="blah">
                    <h1 class="text-center mt-4">{{ __('Selamat datang, :name', ['name' => Auth::user()->name]) }}</h1>
                    
                    <div class="card-body">
                        <h5>{{ __('Nama Akun:') }}</h5>
                        <p>{{ Auth::user()->name }}</p>

                        <h5>{{ __('Email:') }}</h5>
                        <p>{{ Auth::user()->email }}</p>
                        
                        <h5>{{ __('Nama:') }}</h5>
                        <p>Naseh Hibban</p>
                        
                        <h5>{{ __('No Telp:') }}</h5>
                        <p>081284799537</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
