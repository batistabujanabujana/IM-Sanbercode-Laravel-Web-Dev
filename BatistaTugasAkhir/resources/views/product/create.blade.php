@extends('layouts.app')

@section('title', 'Tambah Product')

@section('content')

<div class="mb-4">
    <h5 class="mb-1">Tambah Product</h5>
    <p class="mb-0 text-muted">
        Tambahkan product baru ke dalam sistem.
    </p>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>

        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    action="{{ route('product.store') }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf

    <div class="mb-3">

        <label for="category_id" class="form-label">
            Category
        </label>

        <select
            name="category_id"
            id="category_id"
            class="form-select"
        >

            <option value="">
                -- Pilih Category --
            </option>

            @foreach($categories as $category)

                <option
                    value="{{ $category->id }}"
                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>

        @error('category_id')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="mb-3">

        <label for="name" class="form-label">
            Nama Product
        </label>

        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            value="{{ old('name') }}"
            placeholder="Contoh: Laptop ASUS"
        >

        @error('name')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="mb-3">

        <label for="price" class="form-label">
            Harga
        </label>

        <input
            type="number"
            name="price"
            id="price"
            class="form-control"
            value="{{ old('price') }}"
            placeholder="Contoh: 5000000"
            min="0"
        >

        @error('price')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="mb-3">

        <label for="stock" class="form-label">
            Stock
        </label>

        <input
            type="number"
            name="stock"
            id="stock"
            class="form-control"
            value="{{ old('stock', 0) }}"
            min="0"
        >

        @error('stock')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="mb-3">

        <label for="description" class="form-label">
            Description
        </label>

        <textarea
            name="description"
            id="description"
            class="form-control"
            rows="5"
            placeholder="Masukkan deskripsi product"
        >{{ old('description') }}</textarea>

        @error('description')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="mb-4">

        <label for="image" class="form-label">
            Image Product
        </label>

        <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            accept="image/jpeg,image/png,image/jpg,image/webp"
        >

        <small class="text-muted">
            Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
        </small>

        @error('image')
            <br>
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>


    <div class="d-flex gap-2">

        <a
            href="{{ route('product.index') }}"
            class="btn btn-secondary"
        >
            Kembali
        </a>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Simpan Product
        </button>

    </div>

</form>

@endsection