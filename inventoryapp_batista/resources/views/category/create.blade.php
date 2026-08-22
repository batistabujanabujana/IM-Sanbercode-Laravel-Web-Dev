@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/category" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/category" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection