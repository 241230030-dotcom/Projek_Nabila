@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-5" style="padding-bottom:150px;">

    <div
        class="card-form mx-auto"
        style="
            max-width:850px;
            padding:30px;
            background:white;
            border-radius:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        "
    >

        <h1
            class="text-center fw-bold mb-3"
            style="color:#16a34a;"
        >
            Form Donasi
        </h1>

        <p class="text-center text-muted mb-4">
            Silakan pilih campaign dan masukkan informasi donasi.
        </p>

        <form action="/donasi" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Pilih Campaign
                </label>

                <select
                    name="campaign_id"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Campaign Donasi --
                    </option>

                    @foreach($campaigns as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->title }}
                        </option>

                    @endforeach

                </select>

                <small class="text-muted">
                    Pilih campaign yang ingin kamu bantu.
                </small>

            </div>

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Nama Donatur
                </label>

                <input
                    type="text"
                    name="donor_name"
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Nama Bank
                </label>

                <input
                    type="text"
                    name="bank_name"
                    class="form-control"
                    placeholder="Contoh: BCA, BRI, Mandiri"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Nomor Rekening
                </label>

                <input
                    type="text"
                    name="account_number"
                    class="form-control"
                    placeholder="Masukkan nomor rekening"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Atas Nama Rekening
                </label>

                <input
                    type="text"
                    name="account_holder"
                    class="form-control"
                    placeholder="Nama pemilik rekening"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label fw-bold">
                    Nominal Donasi
                </label>

                <input
                    type="number"
                    name="amount"
                    class="form-control"
                    placeholder="Contoh: 50000"
                    required
                >

                <small class="text-muted">
                    Masukkan jumlah donasi dalam rupiah.
                </small>

            </div>

            <div class="mb-4">

                <label class="form-label fw-bold">
                    Pesan / Doa (Opsional)
                </label>

                <textarea
                    name="message"
                    class="form-control"
                    rows="3"
                    placeholder="Tuliskan pesan atau doa"
                ></textarea>

            </div>

            <button
                type="submit"
                class="btn w-100 text-white fw-bold"
                style="
                    background:#16a34a;
                    padding:12px;
                    font-size:18px;
                    border-radius:10px;
                "
            >
                Kirim Donasi
            </button>

        </form>

    </div>

</div>

@endsection