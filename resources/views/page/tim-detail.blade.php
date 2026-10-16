@extends('layouts.app')

@section('title', 'Tim Kreatif - Vortex Agency')

@section('content')
<div>
    <h2 class="text-center fw-bold mb-4">Detail Tim</h2>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div>
                <a href="{{ route('tim') }}" class="btn btn-secondary btn-sm rounded-0 mb-3">&larr; Kembali ke Daftar Tim</a>
            </div>
            <div class="card shadow-sm border-0 ">
                <img src="{{ asset($tim->foto) }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Foto Tim">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $tim->nama }}</h5>
                    <p class="badge bg-primary mb-2">{{ $tim->posisi }}</p>
                    <p class="card-text">{{ $tim->bio }}</p>
                    <p class="card-text"><strong>Keahlian:</strong> {{ $tim->keahlian }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $tim->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection