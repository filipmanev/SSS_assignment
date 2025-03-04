@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Students</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
</div>

<form action="{{ route('students.index') }}" method="GET" class="row mb-3">
    <div class="col-md-3">
        <select name="college" class="form-select" onchange="this.form.submit()">
            <option value="">All Colleges</option>
            @foreach($colleges as $college)
                <option value="{{ $college->id }}"
                    {{ request('college') == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <select name="sort" class="form-select" onchange="this.form.submit()">
            <option value="">Sort By</option>
            <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name</option>
            <option value="email" {{ request('sort') == 'email' ? 'selected' : '' }}>Email</option>
            <option value="phone" {{ request('sort') == 'phone' ? 'selected' : '' }}>Phone</option>
            <option value="dob" {{ request('sort') == 'dob' ? 'selected' : '' }}>DOB</option>
        </select>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>DOB</th>
            <th>College</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->college->name }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this student?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $students->links() }}
@endsection
