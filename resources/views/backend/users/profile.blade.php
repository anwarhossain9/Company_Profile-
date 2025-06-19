@extends('backend.master')

@section('title', isset($testimonial) ? 'Edit' : 'Create'.'Testimonial')

@section('style')
<style>
    body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #4CAF50;
        }

        .profile-header h2 {
            margin: 15px 0 5px;
            font-size: 24px;
            color: #333;
        }

        .profile-header p {
            color: #666;
            font-size: 14px;
        }

        .profile-info {
            margin-top: 20px;
        }

        .info-item {
            margin: 10px 0;
        }

        .info-item strong {
            color: #444;
            display: inline-block;
            width: 120px;
        }

        .edit-btn {
            display: block;
            text-align: center;
            margin-top: 30px;
        }

        .edit-btn a {
            background: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .edit-btn a:hover {
            background: #45a049;
        }
</style>

@endsection

@section('body')
<div class="profile-container">
        <div class="profile-header">
            <img src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : 'https://via.placeholder.com/120' }}" alt="Profile Photo">
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->email }}</p>
        </div>

        <div class="profile-info">
            <div class="info-item"><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</div>
            <div class="info-item"><strong>Address:</strong> {{ $user->address ?? 'N/A' }}</div>
            <div class="info-item"><strong>Bio:</strong> {{ $user->bio ?? 'N/A' }}</div>
            <div class="info-item"><strong>Role:</strong> {{ $user->role ?? 'Student' }}</div>
        </div>

        <div class="edit-btn">
            <a href="{{ route('users.edit',$user->id) }}">Edit Profile</a>
        </div>
    </div>
@endsection