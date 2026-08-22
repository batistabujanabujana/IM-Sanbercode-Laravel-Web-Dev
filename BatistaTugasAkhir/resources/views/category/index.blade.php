@extends('layouts.app')

@section('title', 'Category')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="mb-1">Data Category</h5>
        <p class="mb-0 text-muted">
            Daftar kategori barang
        </p>
    </div>

    <a href="{{ route('category.create') }}" class="btn btn-primary">
        + Tambah Category
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
        </button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Category</th>
                <th>Description</th>
                <th width="220">Action</th>
            </tr>
        </thead>

        <tbody>

            @forelse($categories as $category)

                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        <strong>
                            {{ $category->name }}
                        </strong>
                    </td>

                    <td>
                        {{ $category->description ?? '-' }}
                    </td>

                    <td>

                        <a
                            href="{{ route('category.show', $category->id) }}"
                            class="btn btn-info btn-sm"
                        >
                            Detail
                        </a>

                        <a
                            href="{{ route('category.edit', $category->id) }}"
                            class="btn btn-warning btn-sm"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('category.destroy', $category->id) }}"
                            method="POST"
                            class="d-inline"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus category ini?')"
                            >
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center py-4">
                        <p class="mb-0 text-muted">
                            Belum ada data category.
                        </p>
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>
</div>

@endsection