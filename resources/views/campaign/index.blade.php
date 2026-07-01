@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="text-center mb-4">

        <h1
            class="fw-bold text-success"
            style="font-size: 32px;"
        >
            Data Campaign
        </h1>

        <p
            class="text-muted"
            style="font-size: 14px;"
        >
            Daftar campaign donasi yang tersedia.
        </p>

    </div>

    <a
        href="/campaign/create"
        class="btn btn-success mb-3 rounded-3 px-4"
    >
        + Tambah Campaign
    </a>

    <div
        class="table-responsive shadow-sm rounded-4 overflow-hidden"
    >

        <table
            class="table table-bordered align-middle bg-white mb-0"
        >

            <thead
                class="table-success"
            >

                <tr>

                    <th>Judul</th>
<th>Deskripsi</th>
<th>Target</th>
<th>Terkumpul</th>
<th>Deadline</th>

                    <th class="py-3 text-center">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

            @foreach($campaigns as $item)

                <tr>

                    <td>{{ $item->title }}</td>

<td>{{ $item->description }}</td>

<td>
    Rp {{ number_format($item->target_donation,0,',','.') }}
</td>

<td>
    Rp {{ number_format($item->collected_donation,0,',','.') }}
</td>

<td>{{ $item->deadline }}</td>

                    <td class="text-center">

                        <a
                            href="/campaign/{{ $item->id }}/edit"
                            class="btn btn-success btn-sm rounded-3 px-3"
                        >
                            Edit
                        </a>

                        <form
                            action="/campaign/{{ $item->id }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm rounded-3 px-3"
                            >
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection