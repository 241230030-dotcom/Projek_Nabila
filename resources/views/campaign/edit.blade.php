@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div 
        class="card-form mx-auto"
        style="
            max-width:500px;
            padding:25px;
            background:white;
        "
    >

        <h2 
            class="text-center fw-bold mb-4"
            style="color:#16a34a;">
            Edit Campaign
        </h2>

        <form action="/campaign/{{ $campaign->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="fw-bold">
                    Judul Campaign
                </label>

                <input 
                    type="text"
                    name="title"
                    class="form-control"
                    value="{{ $campaign->title }}"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="fw-bold">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    class="form-control"
                    rows="3"
                    required
                >{{ $campaign->description }}</textarea>

            </div>

            <div class="mb-3">

                <label class="fw-bold">
                    Target Donasi
                </label>

                <input
                    type="number"
                    name="target_donation"
                    class="form-control"
                    value="{{ $campaign->target_donation }}"
                    required
                >

            </div>

            <div class="mb-4">

                <label class="fw-bold">
                    Deadline
                </label>

                <input
                    type="date"
                    name="deadline"
                    class="form-control"
                    value="{{ $campaign->deadline }}"
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
                Update Campaign
            </button>

        </form>

    </div>

</div>

@endsection