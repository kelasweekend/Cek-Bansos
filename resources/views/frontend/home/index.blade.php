@extends('layouts.frontend.master')

@section('title')
    Selamat Datang di Website Pengelolaan Bansos
@endsection

<head>
    <link rel="icon" type="image/png" href="{{ asset('assets/fe/img/header.png') }}">
</head>

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('assets/fe/img/header.png') }}" class="img-fluid" alt="" style="width: 100%;">
                </div>
                <div class="col-md-7">
                    <h1>Penjelasan Singkat Tentang
                        Bansos (Bantuan Sosial)</h1>
                    <p class="justify-align-between">Bantuan sosial merupakan pemberian bantuan yang sifatnya tidak
                        secara terus menerus dan selektif
                        dalam bentuk uang/barang kepada masyarakat yang bertujuan untuk peningkatan kesejahteraan
                        masyarakat. Dalam pemberian bantuan sosial, baik Pemerintah Daerah sebagai pemberi bantuan
                        sosial
                        maupun Masyarakat/Lembaga Kemasyarakatan sebagai penerima bantuan sosial mempunyai kewajiban
                        untuk mempertanggungjawabkan bantuan sosial sesuai porsinya berdasarkan ketentuan yang berlaku.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="tujuan">
            <div class="container">
                <div class="row">
                    <h1 style="text-align:center">Tujuan Bansos</h1>
                    <div class="col-md-7">
                        <p class="justify-align-between">
                        <h3 style="margin-top: 150px;">1. Rehabilitasi Sosial</h3>
                        <p>Bansos bertujuan untuk memulihkan dan mengembangkan kemampuan seseorang yang mengalami
                            disfungsi
                            sosial agar dapat melaksanakan fungsi sosialnya secara wajar.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section1.png') }}" class="img-fluid" alt=""
                            style="width: 100%; margin-bottom: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1"">
            <div class=" container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section2.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">2. Perlindungan Sosial</h3>
                        <p class="justify-align-between">Tujuan selanjutnya adalah untuk mencegah dan menangani risiko
                            dari
                            guncangan dan kerentanan sosial seseorang, keluarga, kelompok masyarakat agar kelangsungan
                            hidupnya dapat dipenuhi sesuai dengan kebutuhan dasar minimal.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan">
            <div id="" class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;"> 3. Pemberdayaan Sosial</h3>
                        <p class="justify-align-between">
                            Bansos bertujuan untuk memulihkan dan mengembangkan kemampuan seseorang yang mengalami
                            disfungsi
                            sosial agar dapat melaksanakan fungsi sosialnya secara wajar.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section3.png') }}" class="img-fluid" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section4.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">4. Jaminan Sosial </h3>
                        <p class="justify-align-between">Bansos sebagai jaminan sosial merupakan skema yang melembaga
                            untuk
                            menjamin penerima bantuan agar dapat memenuhi kebutuhan dasar hidupnya yang layak.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 style="margin-top: 150px;">5. Penanggulangan Kemiskinan</h3>
                        <p class="justify-align-between">
                            Tujuan bansos sebagai penanggulangan kemiskinan memiliki arti bahwa bansos merupakan
                            kebijakan, program, kegiatan, dan sub kegiatan yang dilakukan terhadap orang, keluarga,
                            kelompok masyarakat yang tidak mempunyai atau mempunyai sumber mata pencaharian dan tidak
                            dapat memenuhi kebutuhan yang layak bagi kemanusiaan.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section5.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section6.png') }}" class="img-fluid naik"
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">6. Penanggulangan Bencana</h3>
                        <p class="justify-align-between">Terakhir, pemberian bansos bertujuan untuk penanggulangan
                            bencana merupakan serangkaian upaya yang ditujukan untuk rehabilitasi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="jenisbansos">
            <div class="container">
                <div class="row">
                    <h1 style="margin-top: 100px;"> Jenis-Jenis Bansos: </h1>
                    <h2>Secara umum, bansos dibedakan menjadi tiga jenis, dan berikut sebagai penjelasannya :</h2>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Uang</h3>
                            <p>Bantuan sosial berupa uang diberikan secara langsung kepada penerima seperti beasiswa
                                bagi
                                anak miskin, yayasan pengelola yatim piatu, nelayan miskin, masyarakat lanjut usia,
                                terlantar, cacat berat dan tunjangan kesehatan putra putri pahlawan yang tidak mampu.
                                Bantuan jenis ini dapat diberikan secara tunai maupun non tunai.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Barang</h3>
                            <p>Bantuan sosial berupa barang adalah barang yang diberikan secara langsung kepada penerima
                                seperti bantuan kendaraan operasional untuk sekolah luar biasa swasta dan masyarakat
                                tidak
                                mampu, bantuan perahu untuk nelayan miskin, bantuan makanan/pakaian kepada yatim
                                piatu/tuna
                                sosial, ternak bagi kelompok masyarakat kurang mampu
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Jasa</h3>
                            <p>Bantuan sosial berupa jasa disalurkan sesuai dengan ketentuan peraturan
                                perundang-undangan.
                                Contoh bantuan berupa jasa adalah pemberian pelatihan untuk penerima bantuan dari satuan
                                kerja (pemberi bansos).
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        <style>
            body {
                background: linear-gradient(0deg, rgba(131,219,108,1) 0%, rgba(127,171,149,1) 50%, rgba(86,164,230,1) 100%);
            }
        </style>

        <section id="webvideo">
            <h3 class="text-center text-light pt-5">
                Cara Pendaftaraan Website Cek Bansos
            </h3>

            <div class="row justify-content-center mt-3">
                <div class="col-md-6 col-10">
                    <div class="card p-3 rounded shadow-sm">
                        <!-- ini embed link youtube -->
                        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="AZlJDDGZgOE"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="artikel">
            <div class="container">
                <h3 class="text-center fw-bold mb-5">
                    Berita CekBansos
                </h3>
 
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-md-3" >
                            <a href="{{ route('index.detail', $item->slug) }}" style="text-decoration: none;"
                                class="text-dark">
                                <div class="card rounded-15 shadow-sm p-3 mb-5">
                                    <img src="{{ asset('img/' . $item->image) }}" class="img-fluid rounded-15 shadow-sm"
                                        alt="">

                                    <h4 class="mt-3 fw-bold text-center">{{  $item->title }}</h4>
                                    <a href="{{ route('index.detail', $item->slug) }}" style="text-decoration: none;"
                                        class="text-center text-dark">Selengkapnya ..</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

@section('styles')
    <!-- player movie html5 youtube embed css -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
@endsection

@section('scripts')
    <!-- player movie html5 youtube embed js -->
    <script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>
    <script>
        const player = new Plyr('#player');
    </script>
@endsection
