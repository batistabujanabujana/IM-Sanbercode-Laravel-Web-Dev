@extends('layouts.app')

@section('title', 'Product')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h5 class="mb-1">Data Product</h5>

        <p class="mb-0 text-muted">
            Daftar product yang tersedia.
        </p>
    </div>

    <a
        href="{{ route('product.create') }}"
        class="btn btn-primary"
    >
        + Tambah Product
    </a>

</div>

@if(session('success'))

    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
    >

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>

@endif


<div class="row">

    @forelse($products as $product)

        <div class="col-md-4 mb-4">

            <div class="card h-100">

                @if($product->image)

                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        class="card-img-top"
                        alt="{{ $product->name }}"
                        style="height: 220px; object-fit: cover;"
                    >

                @else

                    <div
                        class="d-flex align-items-center justify-content-center bg-light"
                        style="height: 220px;"
                    >

                        <span class="text-muted">
                            Tidak ada gambar
                        </span>

                    </div>

                @endif


                <div class="card-body">

                    <span class="badge bg-primary mb-2">
                        {{ $product->category->name ?? '-' }}
                    </span>

                    <h5 class="card-title">
                        {{ $product->name }}
                    </h5>

                    <h6 class="text-primary">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h6>

                    <p class="mb-2">
                        Stock:
                        <strong>{{ $product->stock }}</strong>
                    </p>

                    <p class="card-text text-muted">
                        {{ Str::limit($product->description, 100) }}
                    </p>

                </div>


                <div class="card-footer bg-white">

                    <a
                        href="{{ route('product.show', $product->id) }}"
                        class="btn btn-info btn-sm"
                    >
                        Detail
                    </a>

                    <a
                        href="{{ route('product.edit', $product->id) }}"
                        class="btn btn-warning btn-sm"
                    >
                        Edit
                    </a>

                    <form
                        action="{{ route('product.destroy', $product->id) }}"
                        method="POST"
                        class="d-inline"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus product ini?')"
                        >
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        </div>

    @empty

        <div class="col-12">

            <div class="alert alert-info text-center">

                Belum ada product.

            </div>

        </div>

    @endforelse

</div>

@endsection