@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>College Index Page </h2>
    <a href="{{ route('colleges.create') }}" class="btn btn-primary" class="float-start">Add New College</a>
</div>
    @if($colleges->isEmpty())
        <p>No colleges available. Please add one.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colleges as $college)
                    <tr>
                        <td>{{ $college->id }}</td>
                        <td>{{ $college->name }}</td>
                        <td>{{ $college->address }}</td>
                        <td>
                            <a href="{{ route('colleges.show', $college->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this college?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
