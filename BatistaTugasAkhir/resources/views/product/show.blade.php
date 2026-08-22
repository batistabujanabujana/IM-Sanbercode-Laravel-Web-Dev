@extends('layouts.app')

@section('title', 'Detail Product')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h5 class="mb-1">Detail Product</h5>

        <p class="mb-0 text-muted">
            Informasi lengkap product.
        </p>
    </div>

    <a
        href="{{ route('product.index') }}"
        class="btn btn-secondary"
    >
        Kembali
    </a>

</div>


<div class="row">

    {{-- GAMBAR --}}
    <div class="col-md-5">

        <div class="card">

            @if($product->image)

                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="card-img-top"
                    style="height: 350px; object-fit: cover;"
                >

            @else

                <div
                    class="d-flex align-items-center justify-content-center bg-light"
                    style="height: 350px;"
                >
                    <span class="text-muted">
                        Tidak ada gambar
                    </span>
                </div>

            @endif

        </div>

    </div>


    {{-- DETAIL --}}
    <div class="col-md-7">

        <div class="card">

            <div class="card-body">

                <span class="badge bg-primary mb-3">
                    {{ $product->category->name ?? '-' }}
                </span>

                <h3 class="mb-3">
                    {{ $product->name }}
                </h3>


                <div class="mb-3">

                    <small class="text-muted">
                        Harga
                    </small>

                    <h4 class="text-primary mb-0">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h4>

                </div>


                <div class="mb-3">

                    <small class="text-muted">
                        Stock
                    </small>

                    <p class="mb-0">
                        {{ $product->stock }}
                    </p>

                </div>


                <div class="mb-4">

                    <small class="text-muted">
                        Description
                    </small>

                    <p class="mb-0">
                        {{ $product->description ?? '-' }}
                    </p>

                </div>


                <div>

                    <a
                        href="{{ route('product.edit', $product->id) }}"
                        class="btn btn-warning"
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
                            class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus product ini?')"
                        >
                            Delete
                        </button>

                    </form>


                    <a
                        href="{{ route('product.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection