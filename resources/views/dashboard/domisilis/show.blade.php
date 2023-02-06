@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <a href="/dashboard/domisili" class="btn btn-success my-5">Kembali</a> 
                <p>{{ $domisili->kodeSurat }}</p>
                <p>{{ $domisili->noSurat }}</p>
                <p>{{ $domisili->nama }}</p>
                <p>{{ $domisili->nik }}</p>
                <p>{{ $domisili->tempatTglLahir }}</p>
                <p>{{ $domisili->pekerjaan }}</p>
                <p>{{ $domisili->alamat }}</p>
                <p>{!! $domisili->keterangan !!}</p>
                <p>{{ $domisili->tglSurat }}</p>
                <p>{{ $domisili->ttd }}</p>
                <p>{{ $domisili->namaTtd }}</p>
        </div>
    </div>
</div>


@endsection