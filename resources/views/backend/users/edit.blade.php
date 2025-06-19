@extends('backend.master')

@section('title', isset($testimonial) ? 'Edit' : 'Create'.'Testimonial')

@section('style')
 <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f0f0;
            padding: 40px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #444;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
            color: green;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('body')
<div class="form-container">
     

        @if(session('success'))
            <div class="message">{{ session('success') }}</div>
        @endif

       <form class="container-fluid" method="post" action="{{route('users.edit',$user->id) }}" enctype="multipart/form-data">
    @csrf 
  <h2 style="color: #764AF1;">Edit Profile</h2>

  
  <div class="row mb-3">
    <div class="col-md-12">
      <label class="form-label">1. Name*</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="given_name" placeholder="Given Name" value="{{$user->given_name}}" required>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="family_name" placeholder="Family Name">
    </div>
  </div>

  

  <div class="row mb-3">
    <div class="col-md-4">
      <label for="nationality" class="form-label">4. Nationality*</label>
      <input type="text" class="form-control" name="nationality" placeholder="Enter your nationality" required>
    </div>
    <div class="col-md-4">
      <label for="religion" class="form-label">5. Religion*</label>
      <input type="text" class="form-control" name="religion" placeholder="Enter your religion" required>
    </div>
    <div class="col-md-4">
      <label for="sex" class="form-label">6. Sex*</label>
      <select class="form-select" name="sex" required>
        <option value="">Select</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>
  </div>


  

 
  
<div class="text-center">
<button type="submit" class="btn-common  btn-submit btn-sm p-3">Update Profile</button>

</div>
</form>
    </div>
@endsection