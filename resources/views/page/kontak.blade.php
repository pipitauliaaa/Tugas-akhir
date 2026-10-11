@extends('layouts.app')

@section('title', 'Kontak - Vortex Agency')

@section('content')
<div class="container col-md-6">
    <div class="card shadow p-4 border-0">
        <h2 class="text-center fw-bold mb-4">Hubungi Kami</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="nama@email.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Pesan / Proyek</label>
                <textarea class="form-control" rows="4" placeholder="Ceritakan proyek Anda..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection