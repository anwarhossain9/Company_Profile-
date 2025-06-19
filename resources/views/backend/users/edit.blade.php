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

       <form class="container-fluid" method="post" action="{{route('apply-submit') }}" enctype="multipart/form-data">
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
    <div class="col-md-6">
      <label for="passport_no" class="form-label">2. Passport No*</label>
      <input type="text" class="form-control" name="passport_no" placeholder="Enter your passport number" required>
    </div>
    <div class="col-md-6">
      <label for="passport_expire" class="form-label">3. Passport Expire Date*</label>
      <input type="date" class="form-control" name="passport_expire" required>
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

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="dob" class="form-label">7. Date Of Birth*</label>
      <input type="date" class="form-control" name="dob" required>
    </div>
    <div class="col-md-6">
      <label for="birth_place" class="form-label">8. Place Of Birth*</label>
      <input type="text" class="form-control" name="birth_place" placeholder="Enter place of birth" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="marital_status" class="form-label">9. Marital Status*</label>
      <select class="form-select" name="marital_status" required>
        <option value="">Please select</option>
        <option>Single</option>
        <option>Married</option>
        <option>Other</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">10. Applicant Email*</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter your email" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="phone" class="form-label">11. Applicant Phone*</label>
      <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
    </div>
    <div class="col-md-6">
      <label for="home_phone" class="form-label">12. Home Phone Number*</label>
      <input type="tel" class="form-control" name="home_phone" placeholder="Enter home phone" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-8">
      <label for="address" class="form-label">13. Homeland Address*</label>
      <textarea class="form-control" name="address" placeholder="Enter your address" required></textarea>
    </div>
    <div class="col-md-4">
      <label for="postcode" class="form-label">14. Postcode*</label>
      <input type="text" class="form-control" name="postcode" placeholder="Postcode" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="university" class="form-label">15. Apply University*</label>
      <input type="text" class="form-control" name="university" placeholder="University name" required>
    </div>
    <div class="col-md-6">
      <label for="major" class="form-label">16. Major Subject*</label>
      <input type="text" class="form-control" name="major" placeholder="Major subject" required>
    </div>
  </div>

  <div class="section">
    <h3 class="form-section-title">EDUCATION BACKGROUND</h3>
    
    <div class="row mb-3">
      <div class="col-md-12">
        <label class="form-label">17. Education History 1*</label>
      </div>
      <div class="col-md-12 mb-2">
        <input type="text" class="form-control" name="edu1_institute" placeholder="Institute Name" required>
      </div>
      <div class="col-md-6 mb-2">
        <input type="text" class="form-control" name="edu1_program" placeholder="Field or program of study" required>
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu1_from" placeholder="From Date (y/m)" required>
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu1_to" placeholder="To Date (y/m)" required>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" name="edu1_certificate" placeholder="Certificate Obtained" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <label class="form-label">18. Education History 2*</label>
      </div>
      <div class="col-md-12 mb-2">
        <input type="text" class="form-control" name="edu2_institute" placeholder="Institute Name" required>
      </div>
      <div class="col-md-6 mb-2">
        <input type="text" class="form-control" name="edu2_program" placeholder="Field or program of study" required>
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu2_from" placeholder="From Date (y/m)" required>
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu2_to" placeholder="To Date (y/m)" required>
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" name="edu2_certificate" placeholder="Certificate Obtained" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <label class="form-label">19. Education History 3</label>
      </div>
      <div class="col-md-12 mb-2">
        <input type="text" class="form-control" name="edu3_institute" placeholder="Institute Name">
      </div>
      <div class="col-md-6 mb-2">
        <input type="text" class="form-control" name="edu3_program" placeholder="Field or program of study">
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu3_from" placeholder="From Date (y/m)">
      </div>
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" name="edu3_to" placeholder="To Date (y/m)">
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" name="edu3_certificate" placeholder="Certificate Obtained">
      </div>
    </div>
  </div>

  <div class="section">
    <h3 class="form-section-title">PERSONAL DETAILS</h3>
    
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="profession" class="form-label">20. Applicant Profession*</label>
        <input type="text" class="form-control" name="profession" placeholder="Your profession" required>
      </div>
      <div class="col-md-6">
        <label for="language" class="form-label">21. Mother Language*</label>
        <input type="text" class="form-control" name="language" placeholder="Mother language" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="father_name" class="form-label">22. Father's Name*</label>
        <input type="text" class="form-control" name="father_name" placeholder="Father's full name" required>
      </div>
      <div class="col-md-6">
        <label for="mother_name" class="form-label">23. Mother's Name*</label>
        <input type="text" class="form-control" name="mother_name" placeholder="Mother's full name" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="father_age" class="form-label">24. Father's Age*</label>
        <input type="number" class="form-control" name="father_age" placeholder="Father's age" required>
      </div>
      <div class="col-md-6">
        <label for="mother_age" class="form-label">25. Mother's Age*</label>
        <input type="number" class="form-control" name="mother_age" placeholder="Mother's age" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="father_employment" class="form-label">26. Father's Employment*</label>
        <input type="text" class="form-control" name="father_employment" placeholder="Father's job or business" required>
      </div>
      <div class="col-md-6">
        <label for="mother_employment" class="form-label">27. Mother's Employment*</label>
        <input type="text" class="form-control" name="mother_employment" placeholder="Mother's job or business" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="father_mobile" class="form-label">28. Father's Mobile No*</label>
        <input type="tel" class="form-control" name="father_mobile" placeholder="Father's phone number" required>
      </div>
      <div class="col-md-6">
        <label for="mother_mobile" class="form-label">29. Mother's Mobile No*</label>
        <input type="tel" class="form-control" name="mother_mobile" placeholder="Mother's phone number" required>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="source" class="form-label">30. Where did You Hear About Us?</label>
      <select class="form-select" name="source" required>
        <option>NewsPaper</option>
        <option>Magazine</option>
        <option>Blog</option>
        <option>Facebook</option>
        <option>Google Ads</option>
        <option>Other</option>
      </select>
    </div>
  </div>

  <div class="section">
    <h3 class="form-section-title">Upload Documents</h3>
    
    <div class="row mb-3">
    <div class="col-md-4">
        <label class="form-label">31. Passport Size Picture*</label>
        <input type="file" class="form-control" name="photo" required>
      </div>
      <div class="col-md-4">
        <label class="form-label">32. Passport Scan Copy*</label>
        <input type="file" class="form-control" name="passport_copy" required>
      </div>
      <div class="col-md-4">
        <label class="form-label">33. Last Academic Certificates*</label>
        <input type="file" class="form-control" name="certificates" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-4">
        <label class="form-label">34. Last Transcripts *</label>
        <input type="file" class="form-control" name="transcript" required>
      </div>
    

    
      <div class="col-md-4">
        <label class="form-label">35. Physical Examination Report (if have)</label>
        <input type="file" class="form-control" name="exam_report">
      </div>
      <div class="col-md-4">
        <label class="form-label">36. Police Clearance (if have)</label>
        <input type="file" class="form-control" name="police_clearance">
      </div>
      </div>
      <div class="row mb-3">
      <div class="col-md-4">
        <label class="form-label">37. Bank Statement 1 (if have)</label>
        <input type="file" class="form-control" name="bank1">
      </div>
  

   
      <div class="col-md-4">
        <label class="form-label">38. Bank Statement 2 (if have)</label>
        <input type="file" class="form-control" name="bank2">
      </div>
      <div class="col-md-4">
        <label class="form-label">39. Bank Statement 3 (if have)</label>
        <input type="file" class="form-control" name="bank3">
      </div>
      </div>

      <div class="row mb-3">
      <div class="col-md-4">
        <label class="form-label">40. English Proficiency (if have)</label>
        <input type="file" class="form-control" name="english_proficiency">
      </div>
    
      <div class="col-md-4">
        <label class="form-label">41.Research Plan</label>
        <input type="file" class="form-control" name="Research_plan">
      </div>
    
      <div class="col-md-4">
        <label class="form-label">42. Recommendation Letter</label>
        <input type="file" class="form-control" name="recommendation_letter" multiple>
      </div>

      
    </div>

     <div class="row mb-3">
      <div class="col-md-4">
        <label class="form-label">43. Acceptance Letter</label>
        <input type="file" class="form-control" name="acceptance_letter">
      </div>
    
      <div class="col-md-4">
        <label class="form-label">44.Extra Curriculum Certificate</label>
        <input type="file" class="form-control" name="extra_curriculum_certificate">
      </div>
    
      <div class="col-md-4">
        <label class="form-label">45. Others Document (if have)</label>
        <input type="file" class="form-control" name="other_documents" multiple>
      </div>

      
    </div>
  </div>
<div class="text-center">
<button type="submit" class="btn-common  btn-submit btn-sm p-3">Update Profile</button>

</div>
</form>
    </div>
@endsection