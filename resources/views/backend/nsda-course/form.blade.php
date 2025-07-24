@extends('backend.master')

@section('title', isset($nsdaCourse) ? 'Edit' : 'Create'." ".'Nsda Course')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($nsdaCourse) ? 'Edit' : 'Create' }} Nsda Course</h3>
                    <a href="{{ route('nsda_courses.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($nsdaCourse) ? route('nsda_courses.update', $nsdaCourse->id) : route('nsda_courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($nsdaCourse))
                            @method('put')
                        @endif

  <div class="row mt-3">

  
  <!-- Text Inputs -->
  <div class="row mt-4">
    <label class="col-md-3">Batch No</label>
    <div class="col-md-9">
        <input type="text" name="batch_no" class="form-control" placeholder="Batch No" value="{{ isset($nsdaCourse) ? $nsdaCourse->batch_no: '' }}" />
  </div>
 </div>
  <div class="row mt-4">
    <label class="col-md-3">Nsda Subject Name</label>
    <div class="col-md-9">
        <input type="text" name="nsda_subject_name" class="form-control" placeholder="Nsda Course Subject  Name" value="{{ isset($nsdaCourse) ? $nsdaCourse->nsda_subject_name: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Start Date</label>
    <div class="col-md-9"><input type="date" name="starts_date" class="form-control" placeholder="Starts Date" value="{{ isset($nsdaCourse) ? $nsdaCourse->starts_date: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Deadline</label>
    <div class="col-md-9"><input type="date" name="deadline" class="form-control"placeholder="Deadline" value="{{ isset($nsdaCourse) ? $nsdaCourse->deadline: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Duration</label>
    <div class="col-md-9"><input type="text" name="duration" class="form-control" placeholder="Duration" value="{{ isset($nsdaCourse) ? $nsdaCourse->duration: '' }}"  />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Class per Week</label>
    <div class="col-md-9"><input type="number" name="class_per_week" class="form-control" placeholder="Class per Week" value="{{ isset($nsdaCourse) ? $nsdaCourse->class_per_week: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Previous Price</label>
    <div class="col-md-9"><input type="number" name="previous_price" class="form-control" placeholder="Previous Price" step="0.01" value="{{ isset($nsdaCourse) ? $nsdaCourse->previous_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Current Price</label>
    <div class="col-md-9"><input type="number" name="current_price" class="form-control" placeholder="Current Price" step="0.01" value="{{ isset($nsdaCourse) ? $nsdaCourse->current_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Class</label>
    <div class="col-md-9"><input type="number" name="total_class" class="form-control" placeholder="Total Class" value="{{ isset($nsdaCourse) ? $nsdaCourse->total_class: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Hours</label>
    <div class="col-md-9"><input type="number" name="total_hours" class="form-control" placeholder="Total Hours" step="0.1" value="{{ isset($nsdaCourse) ? $nsdaCourse->total_hours: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Available Seat</label>
    <div class="col-md-9"><input type="number" name="available_seat" class="form-control" placeholder="Available Seat" value="{{ isset($nsdaCourse) ? $nsdaCourse->available_seat: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Schedule</label>
    <div class="col-md-9"><input type="text" name="schedule" class="form-control" placeholder="Schedule" value="{{ isset($nsdaCourse) ? $nsdaCourse->schedule: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Venue</label><div class="col-md-9">
        <input type="text" name="venue" class="form-control" placeholder="Venue" value="{{ isset($nsdaCourse) ? $nsdaCourse->venue: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 1 Amount</label>
    <div class="col-md-9">
        <input type="number" name="installment1_amount" class="form-control" placeholder="Installment 1 Amount" step="0.01" value="{{ isset($nsdaCourse) ? $nsdaCourse->installment1_amount: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 2 Amount</label>
    <div class="col-md-9"><input type="number" name="installment2_amount" class="form-control" placeholder="Installment 2 Amount" step="0.01" value="{{ isset($nsdaCourse) ? $nsdaCourse->installment2_amount: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Name</label>
    <div class="col-md-9"><input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_name: '' }}"/>
</div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor Description</label>
    <div class="col-md-9">
       <textarea name="instructor_description" class="form-control" rows="4" placeholder="Instructor Description">{{ isset($nsdaCourse) ? $nsdaCourse->instructor_description: '' }}</textarea>
</div>
</div>

<div class="row mt-4">
    <label for="" class="col-md-3">Instructor Image</label>
    <div class="col-md-9">
        <input type="file" name="instructor_image" class="form-control" accept="image/*" id="imagez" />
        @if(isset($nsdaCourse))
            <img src="{{ asset($nsdaCourse->instructor_image) }}" alt="" style="height: 80px" />
         @endif
    </div>
                            
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor Designation</label>
    <div class="col-md-9"><input type="text" name="instructor_designation" class="form-control" placeholder="Instructor Designation" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_designation: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Email Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_email_link" class="form-control" placeholder="Instructor Email Link" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_email_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor FaceBook Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_facebook_link" class="form-control" placeholder="Instructor Facebook Link" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_facebook_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor linkdin Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_linkdin_link" class="form-control" placeholder="Instructor Linkdin Link" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_linkdin_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor Twiter Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_twiter_link" class="form-control" placeholder="Instructor Twiter Link" value="{{ isset($nsdaCourse) ? $nsdaCourse->instructor_twiter_link: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Title</label>
    <div class="col-md-9">
        <input type="text" name="job_sectors_title" class="form-control" placeholder="Job Sectors Title" value="{{ isset($nsdaCourse) ? $nsdaCourse->job_sectors_title: '' }}"/>
</div>
</div>

  <!-- Textareas -->
  <div class="row mt-4">
    <label class="col-md-3">Eligibility</label>
    <div class="col-md-9"><textarea name="eligibility" class="form-control" rows="4" placeholder="Eligibility">{{ isset($nsdaCourse) ? $nsdaCourse->eligibility: '' }}</textarea>
</div></div>
  <div class="row mt-4">
    <label class="col-md-3">Curriculum</label>
    <div class="col-md-9">
        <textarea name="curriculum" class="form-control" rows="4" placeholder="Curriculum">{{ isset($nsdaCourse) ? $nsdaCourse->curriculum: '' }}</textarea>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">FAQs</label>
    <div class="col-md-9">
        <textarea name="faqs" class="form-control" rows="4" placeholder="FAQs">{{ isset($nsdaCourse) ? $nsdaCourse->faqs: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Reason of Choosing This Nsda</label>
    <div class="col-md-9">
        <textarea name="reason_of_choosing_this_nsda" class="form-control" rows="4" placeholder="Why choose this Nsda Course?">{{ isset($nsdaCourse) ? $nsdaCourse->reason_of_choosing_this_nsda: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Description</label>
    <div class="col-md-9">
        <textarea name="job_sectors_description" class="form-control" rows="4" placeholder="Job Sectors Description">{{ isset($nsdaCourse) ? $nsdaCourse->job_sectors_description: '' }}</textarea>
    </div>
</div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="nsda_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($nsdaCourse))
                                    <img src="{{ asset($nsdaCourse->nsda_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Short Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="short_description" id="" class="form-control ckeditor" placeholder=" short description">{{ isset($nsdaCourse) ? $nsdaCourse->short_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Long Description</label>
                            <div class="col-md-9">
                                <textarea name="long_description" id="" class="form-control ckeditor" placeholder=" long description">{{ isset($nsdaCourse) ? $nsdaCourse->long_description : '' }}</textarea>
                            </div>
                            
                        </div>
                       
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($nsdaCourse) && $nsdaCourse->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($nsdaCourse) ? 'Update' : 'Create' }} Nsda Course ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush


