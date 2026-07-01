@extends('layouts.app')

@section('content')

<div class="container mt-4">

```
<div
    class="card-form mx-auto"
    style="
        max-width:500px;
        padding:25px;
        background:white;
    "
>

    <h1
        class="text-center fw-bold mb-3"
        style="color:#16a34a;"
    >
        Tambah Campaign
    </h1>

    <form action="/campaign" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label fw-bold">
                Judul Campaign
            </label>

            <input
                type="text"
                name="title"
                class="form-control"
                placeholder="Masukkan judul campaign"
                required
            >

        </div>

        <div class="mb-3">

            <label class="form-label fw-bold">
                Target Donasi
            </label>

            <input
                type="number"
                name="target_donation"
                class="form-control"
                placeholder="Contoh: 10000000"
                required
            >

        </div>

        <div class="mb-3">

            <label class="form-label fw-bold">
                Donasi Terkumpul
            </label>

            <input
                type="number"
                name="collected_donation"
                class="form-control"
                value="0"
                required
            >

        </div>

        <button
            type="submit"
            class="btn w-100 text-white fw-bold"
            style="
                background:#16a34a;
                padding:10px;
            "
        >
            Simpan Campaign
        </button>

    </form>

</div>
```

</div>

@endsection
