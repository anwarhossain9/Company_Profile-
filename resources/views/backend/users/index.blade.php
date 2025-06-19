@extends('backend.master')

@section('title', isset($testimonial) ? 'Edit' : 'Create'.'Testimonial')

@section('body')
@foreach($users as $user)
    <p>{{ $user->name }} - {{ $user->email }}</p>
    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline">
        @csrf @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
@endsection