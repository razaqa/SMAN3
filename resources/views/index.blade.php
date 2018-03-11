@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col">
            <!-- carousel code -->
            <div id="home-carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                    <li data-target="#home-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">

                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_1.jpg') }}" alt="First slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                TELADAN
                            </h3>
                        </div>
                    </div>

                    <!-- second slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_2.jpg') }}" alt="Second slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                INTELEKTUAL
                            </h3>
                        </div>
                    </div>

                    <!-- third slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_3.jpg') }}" alt="Third slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                ADAB
                            </h3>
                        </div>
                    </div>

                    <!-- fourth slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_4.jpg') }}" alt="Fourth slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                RAMAH ANAK
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- controls -->
                <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> -->
                </a>
                <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> -->
                </a>
            </div>

        </div>
    </div>
</div>

<div id="onboard" class="fullpage bg-dark white container-fluid row text-center">
    <div class="item col-md">
        <div class="heading">
            <h5>SEJARAH SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Latar belakang, sejarah, dan kisah dibalik berdirinya SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>AKADEMIK SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Sistem akademik dan kurikulum yang diterapkan SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>PRESTASI SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Prestasi akademik, non-akademik, dan prestasi lain SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
</div>

<div id="parallax-top" class="parallax-container row align-items-center" data-parallax="scroll" data-src="{{ asset('img/photos/visi.jpeg') }}">
    <div id="parallax-overlay" class="container-fluid">
        <div class="container white align-self-center">
            <div class="heading col-sm-12">
                <h1 class="col-sm-12 text-center">SARANA &amp; PRASARANA</h1>
            </div>
            <div class="paragraf col-sm-12">
                <p class="col-sm-12 text-center">SMA Negeri 3 Jakarta memiliki berbagai fasilitas untuk menunjang kegiatan pembelajaran siswa</p>
            </div>
            <div class="action col-sm-12 text-center">
                <a href="#" class="btn btn-outline-info btn-lg">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
</div>

<div id="event" class="container">
    <div class="row" style="margin-bottom: 35px;">
        <div class="heading col-sm-8 semi-dark">
            <h1 class="col-sm-12">Acara dan Kegiatan</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row">
        <div class="post shadow-bottom col-xs-12 col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sambutan" class="container-fluid full-height">
    <div class="container white align-self-center">
        <div class="heading col-sm-12">
            <h1 class="col-sm-12 text-center">SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
        <div class="col-sm-12 row">
            <div class="col-md-8">
                <div class="paragraf">
                    <p>Pada kesempatan yang baik dan penuh berkah ini, marilah kita panjatkan puji dan syukur Kehadirat Tuhan Yang Maha Kuasa karena pada hari yang berbahagia ini, telah diresmikannya website sekolah kita. Saya juga mengucapkan terimakasih kepada Bapak/Ibu/Saudara yang telah memberikan dukungannya sehingga website ini bisa terwujud, juga kepada semua pihak yang telah ikut serta dalam proses pembuatan website ini. Dengan adanya website baru ini, diharapkan akan menambah semangat kita untuk lebih dapat meningkatkan kualitas dan semangat belajar kita. Semoga website baru ini dapat dimanfaatkan dengan sebaik-baiknya. </p>
                </div>
            </div>
            <div class="col-md-4 trailer">
                <img class="d-none d-md-block col-sm-12" src="{{ asset('img/photos/kepala_sekolah.png') }}">
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/jquery.parallax.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
