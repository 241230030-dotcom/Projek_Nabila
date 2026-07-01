@extends('app')

@section('title', 'Feeds')

@section('content')

<div class="text-center mb-4">
    <h2 class="fw-bold text-success">Daftar Feed Sosial Act</h2>
    <small class="text-muted">
        Simulasi Pengelolaan Big Data Sistem Informasi (500 Records)
    </small>
</div>

<form action="/feeds" method="GET" class="row g-2 mb-4">

    <div class="col-md-6">
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               class="form-control"
               placeholder="Cari judul aksi sosial...">
    </div>

    <div class="col-md-3">
        <select name="min_like" class="form-select">
            <option value="">Semua Like</option>
            <option value="500" {{ request('min_like') == 500 ? 'selected' : '' }}>&ge; 500 Like</option>
            <option value="5000" {{ request('min_like') == 5000 ? 'selected' : '' }}>&ge; 5.000 Like</option>
            <option value="8000" {{ request('min_like') == 8000 ? 'selected' : '' }}>&ge; 8.000 Like</option>
            <option value="10000" {{ request('min_like') == 10000 ? 'selected' : '' }}>&ge; 10.000 Like</option>
        </select>
    </div>

    <div class="col-md-3 d-grid">
        <button class="btn btn-success">
            Terapkan Filter
        </button>
    </div>

</form>

<div class="row g-3">

    @forelse($feeds as $cp)
        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">
                    <small class="text-success fw-bold">FEED AKTIF</small>

                    <h5 class="fw-bold mt-2">
                        {{ $cp->title }}
                    </h5>

                    <p class="text-muted small">
                        {{ $cp->statusFeed }}
                    </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span>Like</span>
                    <strong>{{ number_format($cp->likeFeed) }}</strong>
                </div>

            </div>

        </div>
    @empty
        <div class="text-center text-muted py-5">
            Data tidak ditemukan
        </div>
    @endforelse

</div>

<div class="mt-4">
    {{ $feeds->links('pagination::bootstrap-5') }}
</div>

@endsection