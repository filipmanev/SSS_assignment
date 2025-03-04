@extends('layouts.app')

@section('content')
<h2>Edit College</h2>

<form action="{{ route('colleges.update', $college->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">College Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $college->name) }}">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" value="{{ old('address', $college->address) }}">
        @error('address') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
