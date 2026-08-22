@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<div class="mb-4">

    <h5 class="mb-1">
        Edit Product
    </h5>

    <p class="mb-0 text-muted">
        Ubah informasi product.
    </p>

</div>


@if($errors->any())

    <div class="alert alert-danger">

        <strong>Terjadi kesalahan!</strong>

        <ul class="mb-0 mt-2">

            @foreach($errors->all() as $error)

                <li>
                    {{ $error }}
                </li>

            @endforeach

        </ul>

    </div>

@endif


<form
    action="{{ route('product.update', $product->id) }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf

    @method('PUT')


    {{-- CATEGORY --}}
    <div class="mb-3">

        <label
            for="category_id"
            class="form-label"
        >
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
                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
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


    {{-- NAME --}}
    <div class="mb-3">

        <label
            for="name"
            class="form-label"
        >
            Nama Product
        </label>

        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            value="{{ old('name', $product->name) }}"
        >

        @error('name')

            <small class="text-danger">
                {{ $message }}
            </small>

        @enderror

    </div>


    {{-- PRICE --}}
    <div class="mb-3">

        <label
            for="price"
            class="form-label"
        >
            Harga
        </label>

        <input
            type="number"
            name="price"
            id="price"
            class="form-control"
            value="{{ old('price', $product->price) }}"
            min="0"
        >

        @error('price')

            <small class="text-danger">
                {{ $message }}
            </small>

        @enderror

    </div>


    {{-- STOCK --}}
    <div class="mb-3">

        <label
            for="stock"
            class="form-label"
        >
            Stock
        </label>

        <input
            type="number"
            name="stock"
            id="stock"
            class="form-control"
            value="{{ old('stock', $product->stock) }}"
            min="0"
        >

        @error('stock')

            <small class="text-danger">
                {{ $message }}
            </small>

        @enderror

    </div>


    {{-- DESCRIPTION --}}
    <div class="mb-3">

        <label
            for="description"
            class="form-label"
        >
            Description
        </label>

        <textarea
            name="description"
            id="description"
            class="form-control"
            rows="5"
        >{{ old('description', $product->description) }}</textarea>

        @error('description')

            <small class="text-danger">
                {{ $message }}
            </small>

        @enderror

    </div>


    {{-- CURRENT IMAGE --}}
    <div class="mb-3">

        <label class="form-label">
            Gambar Saat Ini
        </label>

        <div>

            @if($product->image)

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    style="
                        width: 200px;
                        height: 150px;
                        object-fit: cover;
                    "
                    class="rounded"
                >

            @else

                <p class="text-muted">
                    Belum ada gambar.
                </p>

            @endif

        </div>

    </div>


    {{-- NEW IMAGE --}}
    <div class="mb-4">

        <label
            for="image"
            class="form-label"
        >
            Ganti Gambar
        </label>

        <input
            type="file"
            name="image"
            id="image"
            class="form-control"
            accept="image/jpeg,image/png,image/jpg,image/webp"
        >

        <small class="text-muted">
            Kosongkan jika tidak ingin mengganti gambar.
            Maksimal 2 MB.
        </small>

        @error('image')

            <br>

            <small class="text-danger">
                {{ $message }}
            </small>

        @enderror

    </div>


    {{-- BUTTON --}}
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
            Update Product
        </button>

    </div>

</form>

@endsection