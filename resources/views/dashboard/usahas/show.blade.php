@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <a href="/dashboard/usaha" class="btn btn-success my-5">Kembali</a> 
                <p>{{ $usaha->kodeSurat }}</p>
                <p>{{ $usaha->noSurat }}</p>
                <p>{{ $usaha->nama }}</p>
                <p>{{ $usaha->nik }}</p>
                <p>{{ $usaha->tempatTglLahir }}</p>
                <p>{{ $usaha->pekerjaan }}</p>
                <p>{{ $usaha->alamat }}</p>
                <p>{!! $usaha->keterangan !!}</p>
                <p>{{ $usaha->tglSurat }}</p>
                <p>{{ $usaha->ttd }}</p>
                <p>{{ $usaha->namaTtd }}</p>
        </div>
    </div>
</div>


@endsection