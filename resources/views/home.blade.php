@extends('layouts.main')

@section('container')

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Web Arsip Surat Gampong Paya Peuntet</h1>
                    <p class="animated slideInDown">
                        Website Arsip Surat ini merupakan karya dari Mahasiswa KKN TEMATIK 2022 kelompok 36 Universitas Malikussaleh, Semoga dengan adanya Web ini dapat membantu pihak gampong dalam membuat surat dengan cepat dan menghemat waktu pengerjaan. Fitur yang tersedia meliputi arsip surat dan pencetakan surat dengan format PDF.
                    </p>
                    <a href="/dashboard" class="btn btn-primary py-3 px-4 animated slideInDown">Mulai Membuat Surat</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/heroWeb.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->

@endsection

    





    