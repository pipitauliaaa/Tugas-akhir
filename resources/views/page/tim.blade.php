@extends('layouts.app')

@section('title', 'Tim Kreatif - Vortex Agency')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mb-4">Tim Kreatif Kami</h2>
    <div class="row">
        @foreach($tims as $tim)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset($tim->foto) }}" class="card-img-top" style="height: 250px; object-fit: contain;" alt="Foto Tim">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $tim->nama }}</h5>
                        <p class="badge bg-primary mb-2">{{ $tim->posisi }}</p>
                        <p class="card-text text-muted small">{{ Str::limit($tim->bio, 60) }}</p>
                    </div>
                    <div class="card-footer grow-flex text-center justify-content-center" style="background-color: #FF9FC6; border-top: none;">
                        <a href="{{ route('tim.detail', $tim->id) }}" class="btn btn-primary btn-sm rounded-0">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $tims->links() }}
    </div>
</div>
@endsection