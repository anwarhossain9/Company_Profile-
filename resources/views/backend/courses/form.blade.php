@extends('backend.master')

@section('title', isset($course) ? 'Edit' : 'Create'." ".'course')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($course) ? 'Edit' : 'Create' }} course</h3>
                    <a href="{{ route('courses.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($course) ? route('courses.update', $course->id) : route('courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($course))
                            @method('put')
                        @endif

                         <div class="row mt-4">
    <label class="col-md-3">Course Category</label>
    <div class="col-md-9">
      <select name="course_category" class="form-control" required>
    <option value="">-- Select Category --</option>
    <option value="Web Development" {{ (isset($course) && $course->course_category == 'Web Development') ? 'selected' : '' }}>Web Development</option>
    <option value="Graphic Design" {{ (isset($course) && $course->course_category == 'Graphic Design') ? 'selected' : '' }}>Graphic Design</option>
    <option value="Digital Marketing" {{ (isset($course) && $course->course_category == 'Digital Marketing') ? 'selected' : '' }}>Digital Marketing</option>
    <option value="Data Science" {{ (isset($course) && $course->course_category == 'Data Science') ? 'selected' : '' }}>Data Science</option>
</select>
    </div>
  </div>

  <!-- Course Type -->
  <div class="row mt-4">
    <label class="col-md-3">Course Type</label>
    <div class="col-md-9">
      <select name="course_type" class="form-control" required>
    <option value="">-- Select Type --</option>
    <option value="Offline" {{ (isset($course) && $course->course_type == 'Offline') ? 'selected' : '' }}>Offline</option>
    <option value="Online" {{ (isset($course) && $course->course_type == 'Online') ? 'selected' : '' }}>Online</option>
    <option value="Hybrid" {{ (isset($course) && $course->course_type == 'Hybrid') ? 'selected' : '' }}>Hybrid</option>
</select>
    </div>
  </div>

  <!-- Text Inputs -->
  <div class="row mt-4">
    <label class="col-md-3">Batch No</label>
    <div class="col-md-9">
        <input type="text" name="batch_no" class="form-control" placeholder="Batch No" value="{{ isset($course) ? $course->batch_no: '' }}" />
  </div>
 </div>
  <div class="row mt-4">
    <label class="col-md-3">Course Name</label>
    <div class="col-md-9">
        <input type="text" name="course_name" class="form-control" placeholder="Course Name" value="{{ isset($course) ? $course->course_name: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Start Date</label>
    <div class="col-md-9"><input type="date" name="starts_date" class="form-control" placeholder="Starts Date" value="{{ isset($course) ? $course->starts_date: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Deadline</label>
    <div class="col-md-9"><input type="date" name="deadline" class="form-control"placeholder="Deadline" value="{{ isset($course) ? $course->deadline: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Duration</label>
    <div class="col-md-9"><input type="text" name="duration" class="form-control" placeholder="Duration" value="{{ isset($course) ? $course->duration: '' }}"  />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Class per Week</label>
    <div class="col-md-9"><input type="number" name="class_per_week" class="form-control" placeholder="Class per Week" value="{{ isset($course) ? $course->class_per_week: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Previous Price</label>
    <div class="col-md-9"><input type="number" name="previous_price" class="form-control" placeholder="Previous Price" step="0.01" value="{{ isset($course) ? $course->previous_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Current Price</label>
    <div class="col-md-9"><input type="number" name="current_price" class="form-control" placeholder="Current Price" step="0.01" value="{{ isset($course) ? $course->current_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Class</label>
    <div class="col-md-9"><input type="number" name="total_class" class="form-control" placeholder="Total Class" value="{{ isset($course) ? $course->total_class: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Hours</label>
    <div class="col-md-9"><input type="number" name="total_hours" class="form-control" placeholder="Total Hours" step="0.1" value="{{ isset($course) ? $course->total_hours: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Available Seat</label>
    <div class="col-md-9"><input type="number" name="available_seat" class="form-control" placeholder="Available Seat" value="{{ isset($course) ? $course->available_seat: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Schedule</label>
    <div class="col-md-9"><input type="text" name="schedule" class="form-control" placeholder="Schedule" value="{{ isset($course) ? $course->schedule: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Venue</label><div class="col-md-9">
        <input type="text" name="venue" class="form-control" placeholder="Venue" value="{{ isset($course) ? $course->venue: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 1 Amount</label>
    <div class="col-md-9">
        <input type="number" name="installment1_amount" class="form-control" placeholder="Installment 1 Amount" step="0.01" value="{{ isset($course) ? $course->installment1_amount: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 2 Amount</label>
    <div class="col-md-9"><input type="number" name="installment2_amount" class="form-control" placeholder="Installment 2 Amount" step="0.01" value="{{ isset($course) ? $course->installment2_amount: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Name</label>
    <div class="col-md-9"><input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name" value="{{ isset($course) ? $course->instructor_name: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Social Media</label>
    <div class="col-md-9">
        <input type="text" name="instructor_social_media" class="form-control" placeholder="Instructor Social Media" value="{{ isset($course) ? $course->instructor_social_media: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Title</label>
    <div class="col-md-9">
        <input type="text" name="job_sectors_title" class="form-control" placeholder="Job Sectors Title" value="{{ isset($course) ? $course->job_sectors_title: '' }}"/>
</div>
</div>

  <!-- Textareas -->
  <div class="row mt-4">
    <label class="col-md-3">Eligibility</label>
    <div class="col-md-9"><textarea name="eligibility" class="form-control" rows="4" placeholder="Eligibility">{{ isset($course) ? $course->eligibility: '' }}</textarea>
</div></div>
  <div class="row mt-4">
    <label class="col-md-3">Curriculum</label>
    <div class="col-md-9">
        <textarea name="curriculum" class="form-control" rows="4" placeholder="Curriculum">{{ isset($course) ? $course->curriculum: '' }}</textarea>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">FAQs</label>
    <div class="col-md-9">
        <textarea name="faqs" class="form-control" rows="4" placeholder="FAQs">{{ isset($course) ? $course->faqs: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Reason of Choosing This Course</label>
    <div class="col-md-9">
        <textarea name="reason_of_choosing_this_course" class="form-control" rows="4" placeholder="Why choose this course?">{{ isset($course) ? $course->reason_of_choosing_this_course: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Description</label>
    <div class="col-md-9">
        <textarea name="job_sectors_description" class="form-control" rows="4" placeholder="Job Sectors Description">{{ isset($course) ? $course->job_sectors_description: '' }}</textarea>
    </div>
</div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="course_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($course))
                                    <img src="{{ asset($course->course_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Short Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="short_description" id="" class="form-control ckeditor" placeholder=" short description">{{ isset($course) ? $course->short_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Long Description</label>
                            <div class="col-md-9">
                                <textarea name="long_description" id="" class="form-control ckeditor" placeholder=" long description">{{ isset($course) ? $course->long_description : '' }}</textarea>
                            </div>
                            
                        </div>
                       
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($course) && $course->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($course) ? 'Update' : 'Create' }} Course ">
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


