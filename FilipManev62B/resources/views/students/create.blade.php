@extends('layouts.app')

@section('content')
<h2>Add New Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Student Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
        @error('dob') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="college_id" class="form-label">College</label>
        <select name="college_id" class="form-select">
            <option value="">-- Select College --</option>
            @foreach($colleges as $college)
                <option value="{{ $college->id }}" {{ old('college_id') == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
        @error('college_id') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
