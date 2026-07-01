@extends('layouts.app')

@section('title', 'Dokumentasi')

@section('content')

<div class="container mt-5">

```
<div class="text-center mb-5">
    <h1 class="fw-bold text-success" style="font-size: 38px;">
        Dokumentasi Kegiatan
    </h1>

    <p class="text-muted">
        Unggah dan kelola dokumen maupun gambar dokumentasi kegiatan donasi.
    </p>
</div>

@if(session('success'))
    <div class="alert alert-success shadow-sm border-0 rounded-4">
        {{ session('success') }}
    </div>
@endif

<div class="card border-0 shadow rounded-4 mb-5">
    <div class="card-body p-4">

        <h4 class="fw-bold text-success mb-4">
            Upload Dokumen / Gambar
        </h4>

        <form action="/documentations"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Nama Dokumen / Gambar
                </label>

                <input type="text"
                       name="title"
                       class="form-control rounded-3"
                       placeholder="Masukkan nama dokumen"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Pilih File
                </label>

                <input type="file"
                       name="attachment"
                       class="form-control rounded-3"
                       required>

                <small class="text-muted">
                    Format yang didukung: PDF, DOCX, PNG, JPG (Maksimal 5 MB)
                </small>
            </div>

            <button type="submit"
                    class="btn btn-success px-4 py-2 rounded-3">
                Unggah File
            </button>

        </form>

    </div>
</div>

<div class="text-center mb-4">
    <h2 class="fw-bold">
        Daftar Dokumentasi
    </h2>
</div>

<div class="row g-4">

    @forelse($files as $file)

    <div class="col-md-6 col-lg-4">

        <div class="card border-0 shadow h-100 rounded-4">

            @if(in_array($file->file_type, ['jpg','jpeg','png']))

                <img
                    src="{{ asset('storage/'.$file->file_path) }}"
                    class="card-img-top"
                    style="height:220px; object-fit:cover; border-radius:16px 16px 0 0;">

            @elseif($file->file_type == 'pdf')

                <iframe
                    src="{{ asset('storage/'.$file->file_path) }}"
                    height="220"
                    class="w-100 border-0 rounded-top">
                </iframe>

            @elseif($file->file_type == 'docx')

                <div class="d-flex align-items-center justify-content-center bg-light"
                     style="height:220px;">
                    <h1>📄</h1>
                </div>

            @endif

            <div class="card-body">

                <h5 class="fw-bold">
                    {{ $file->title }}
                </h5>

                <span class="badge bg-success">
                    {{ strtoupper($file->file_type) }}
                </span>

            </div>

            <div class="card-footer bg-white border-0 pb-4">

                <a href="{{ asset('storage/'.$file->file_path) }}"
                   target="_blank"
                   class="btn btn-primary w-100 rounded-3">
                    Preview File
                </a>

            </div>

        </div>

    </div>

    @empty

    <div class="col-12">

        <div class="alert alert-secondary text-center rounded-4">
            Belum ada file yang diunggah.
        </div>

    </div>

    @endforelse

</div>
```

</div>

@endsection
