@extends('layouts.app')

@section('title', 'Detail Category')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="mb-1">Detail Category</h5>
        <p class="mb-0 text-muted">
            Informasi detail category.
        </p>
    </div>

    <a
        href="{{ route('category.index') }}"
        class="btn btn-secondary"
    >
        Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">

        <div class="mb-4">
            <label class="form-label text-muted">
                ID
            </label>

            <div class="form-control">
                {{ $category->id }}
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label text-muted">
                Nama Category
            </label>

            <div class="form-control">
                {{ $category->name }}
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label text-muted">
                Description
            </label>

            <div class="form-control" style="min-height: 100px;">
                {{ $category->description ?? '-' }}
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label text-muted">
                Dibuat Pada
            </label>

            <div class="form-control">
                {{ $category->created_at->format('d M Y H:i') }}
            </div>
        </div>

        <div>
            <a
                href="{{ route('category.edit', $category->id) }}"
                class="btn btn-warning"
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
                    class="btn btn-danger"
                    onclick="return confirm('Yakin ingin menghapus category ini?')"
                >
                    Delete
                </button>
            </form>

            <a
                href="{{ route('category.index') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>
        </div>

    </div>
</div>

@endsection