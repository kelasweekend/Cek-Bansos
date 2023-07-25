@extends('layouts.frontend.master')

@section('title')
    {{ $data->title }}
@endsection

<head>
    <link rel="icon" type="image/png" href="{{ asset('assets/fe/img/header.png') }}">
</head>

@section('content')
    <main>
        <section class="bansos">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-8">
                        <div class="card p-3 rounded-15 shadow-sm">
                            <img src="{{ asset('img/' . $data->image) }}" class="img-fluid rounded-15 shadow-sm"
                            alt="">
                            <h1 class="mt-3">{{ $data->title }}</h1>
                            <p class="mt-1">
                                {!! $data->body !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            body {
                background: linear-gradient(0deg, rgba(131, 219, 108, 1) 0%, rgba(127, 171, 149, 1) 50%, rgba(86, 164, 230, 1) 100%);
            }
        </style>
    </main>
@endsection
