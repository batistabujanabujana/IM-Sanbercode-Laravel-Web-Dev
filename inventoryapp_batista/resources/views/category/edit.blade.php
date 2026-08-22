@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/category/{{ $category->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $category->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/category" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection