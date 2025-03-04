@extends('layouts.app')

@section('content')
<h2>College Details</h2>
<p><strong>ID:</strong> {{ $college->id }}</p>
<p><strong>Name:</strong> {{ $college->name }}</p>
<p><strong>Address:</strong> {{ $college->address }}</p>

<a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back</a>
@endsection
