@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h1 class="mb-2">Create a new Account!</h1>
<h4 class="text-muted mb-4">Sign Up Form</h4>

<form action="{{ route('welcome') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">First name:</label>
        <input type="text" name="nama_depan" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Last name:</label>
        <input type="text" name="nama_belakang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label d-block">Gender:</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
            <label class="form-check-label" for="genderMale">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
            <label class="form-check-label" for="genderFemale">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other">
            <label class="form-check-label" for="genderOther">Other</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Nationality:</label>
        <select name="nationality" class="form-select">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label d-block">Language Spoken:</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" id="langIndo" value="Bahasa Indonesia">
            <label class="form-check-label" for="langIndo">Bahasa Indonesia</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" id="langEng" value="English">
            <label class="form-check-label" for="langEng">English</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" id="langOther" value="Other">
            <label class="form-check-label" for="langOther">Other</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Bio:</label>
        <textarea name="bio" class="form-control" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
@endsection