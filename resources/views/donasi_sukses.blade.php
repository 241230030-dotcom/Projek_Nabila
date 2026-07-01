@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-success mb-4">
            Donasi Berhasil
        </h2>

        <table class="table">

            <tr>
                <th>Campaign</th>
                <td>{{ $campaign->title }}</td>
            </tr>

            <tr>
                <th>Nama Donatur</th>
                <td>{{ $donation->donor_name }}</td>
            </tr>

            <tr>
                <th>Bank</th>
                <td>{{ $donation->bank_name }}</td>
            </tr>

            <tr>
                <th>Nomor Rekening</th>
                <td>{{ $donation->account_number }}</td>
            </tr>

            <tr>
                <th>Atas Nama Rekening</th>
                <td>{{ $donation->account_holder }}</td>
            </tr>

            <tr>
                <th>Nominal Donasi</th>
                <td>Rp {{ number_format($donation->amount,0,',','.') }}</td>
            </tr>

            <tr>
                <th>Pesan / Doa</th>
                <td>{{ $donation->message }}</td>
            </tr>

        </table>

        <a href="/campaign" class="btn btn-success">
            Kembali ke Campaign
        </a>

    </div>

</div>

@endsection