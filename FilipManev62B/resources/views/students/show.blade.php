@extends('layouts.app')

@section('content')
<h2>Student Details</h2>
<p><strong>ID:</strong> {{ $student->id }}</p>
<p><strong>Name:</strong> {{ $student->name }}</p>
<p><strong>Email:</strong> {{ $student->email }}</p>
<p><strong>Phone:</strong> {{ $student->phone }}</p>
<p><strong>DOB:</strong> {{ $student->dob }}</p>
<p><strong>College:</strong> {{ $student->college->name }}</p>

<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
