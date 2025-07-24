@extends('backend.master')

@section('title', isset($asset) ? 'Edit' : 'Create'." ".'Asset')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($asset) ? 'Edit' : 'Create' }} Asset</h3>
                    <a href="{{ route('assets.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($asset) ? route('assets.update', $asset->id) : route('assets.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($asset))
                            @method('put')
                        @endif

                        <div class="row mt-3">

      <label for="" class="col-md-3"> Asset Category Name</label>
      <div class="col-md-9">
          <select name="asset_category_id" class=" form-control " data-toggle="select"
              data-placeholder="Choose ...">
              <option value="">Select a asset category</option>
              @foreach ($assetCategories as $assetCategory)
                  <option value="{{ $assetCategory->id }}"
                      {{ $errors->any() ? old('asset_category_id') : (isset($asset) && $asset->asset_category_id == $assetCategory->id ? 'selected' : '') }}>
                      {{ $assetCategory->asset_category_name }}</option>
              @endforeach
          </select>
      </div>
  </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Top Image</label>
                            <div class="col-md-9">
                                <input type="file" name="top_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($asset))
                                    <img src="{{ asset($asset->top_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>


                        <div class="row mt-4">
                            <label class="col-md-3">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ isset($asset) ? $asset->title: '' }}" />
                            </div>
                       </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Short Description Asset</label>
                           
                            <div class="col-md-9">
                                <textarea name="short_description_asset" id="" class="form-control ckeditor" placeholder="Short Description Asset">{{ isset($asset) ? $asset->short_description_asset : '' }}</textarea>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">Occupation Name</label>
                            <div class="col-md-9">
                                <input type="text" name="occupation_name" class="form-control" placeholder="Occupation Name" value="{{ isset($asset) ? $asset->occupation_name: '' }}" />
                            </div>
                       </div>




                       <div class="row mt-4">
                            <label class="col-md-3">Registration Link</label>
                            <div class="col-md-9">
                                <input type="text" name="registration_link" class="form-control" placeholder="Registration Link" value="{{ isset($asset) ? $asset->registration_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">

    <label class="col-md-3">Batch No</label>
    <div class="col-md-9">
        <input type="text" name="batch_no" class="form-control" placeholder="Batch No" value="{{ isset($asset) ? $asset->batch_no: '' }}" />
  </div>
 </div>
  
  <div class="row mt-4">
    <label class="col-md-3">Start Date</label>
    <div class="col-md-9"><input type="date" name="starts_date" class="form-control" placeholder="Starts Date" value="{{ isset($asset) ? $asset->starts_date: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Deadline</label>
    <div class="col-md-9"><input type="date" name="deadline" class="form-control"placeholder="Deadline" value="{{ isset($asset) ? $asset->deadline: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Duration</label>
    <div class="col-md-9"><input type="text" name="duration" class="form-control" placeholder="Duration" value="{{ isset($asset) ? $asset->duration: '' }}"  />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Class per Week</label>
    <div class="col-md-9"><input type="number" name="class_per_week" class="form-control" placeholder="Class per Week" value="{{ isset($asset) ? $asset->class_per_week: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Previous Price</label>
    <div class="col-md-9"><input type="number" name="previous_price" class="form-control" placeholder="Previous Price" step="0.01" value="{{ isset($asset) ? $asset->previous_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Current Price</label>
    <div class="col-md-9"><input type="number" name="current_price" class="form-control" placeholder="Current Price" step="0.01" value="{{ isset($asset) ? $asset->current_price: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Class</label>
    <div class="col-md-9"><input type="number" name="total_class" class="form-control" placeholder="Total Class" value="{{ isset($asset) ? $asset->total_class: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Total Hours</label>
    <div class="col-md-9"><input type="number" name="total_hours" class="form-control" placeholder="Total Hours" step="0.1" value="{{ isset($asset) ? $asset->total_hours: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Available Seat</label>
    <div class="col-md-9"><input type="number" name="available_seat" class="form-control" placeholder="Available Seat" value="{{ isset($asset) ? $asset->available_seat: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Schedule</label>
    <div class="col-md-9"><input type="text" name="schedule" class="form-control" placeholder="Schedule" value="{{ isset($asset) ? $asset->schedule: '' }}" />
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Venue</label><div class="col-md-9">
        <input type="text" name="venue" class="form-control" placeholder="Venue" value="{{ isset($asset) ? $asset->venue: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 1 Amount</label>
    <div class="col-md-9">
        <input type="number" name="installment1_amount" class="form-control" placeholder="Installment 1 Amount" step="0.01" value="{{ isset($asset) ? $asset->installment1_amount: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Installment 2 Amount</label>
    <div class="col-md-9"><input type="number" name="installment2_amount" class="form-control" placeholder="Installment 2 Amount" step="0.01" value="{{ isset($asset) ? $asset->installment2_amount: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Name</label>
    <div class="col-md-9"><input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name" value="{{ isset($asset) ? $asset->instructor_name: '' }}"/>
</div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor Designation</label>
    <div class="col-md-9"><input type="text" name="instructor_designation" class="form-control" placeholder="Instructor Designation" value="{{ isset($asset) ? $asset->instructor_designation: '' }}"/>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Instructor Email Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_email_link" class="form-control" placeholder="Instructor Email Link" value="{{ isset($asset) ? $asset->instructor_email_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor FaceBook Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_facebook_link" class="form-control" placeholder="Instructor Facebook Link" value="{{ isset($asset) ? $asset->instructor_facebook_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor linkdin Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_linkdin_link" class="form-control" placeholder="Instructor Linkdin Link" value="{{ isset($asset) ? $asset->instructor_linkdin_link: '' }}"/>
    </div>
</div>

<div class="row mt-4">
    <label class="col-md-3">Instructor Twiter Link</label>
    <div class="col-md-9">
        <input type="text" name="instructor_twiter_link" class="form-control" placeholder="Instructor Twiter Link" value="{{ isset($asset) ? $asset->instructor_twiter_link: '' }}"/>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Title</label>
    <div class="col-md-9">
        <input type="text" name="job_sectors_title" class="form-control" placeholder="Job Sectors Title" value="{{ isset($asset) ? $asset->job_sectors_title: '' }}"/>
</div>
</div>

  <!-- Textareas -->

  <div class="row mt-4">
    <label class="col-md-3">Instructor Description</label>
    <div class="col-md-9">
       <textarea name="instructor_description" class="form-control" rows="4" placeholder="Instructor Description">{{ isset($asset) ? $asset->instructor_description: '' }}</textarea>
</div>
</div>

<div class="row mt-4">
    <label for="" class="col-md-3">Instructor Image</label>
    <div class="col-md-9">
        <input type="file" name="instructor_image" class="form-control" accept="image/*" id="imagez" />
        @if(isset($asset))
            <img src="{{ asset($asset->instructor_image) }}" alt="" style="height: 80px" />
         @endif
    </div>
                            
</div>

  <div class="row mt-4">
    <label class="col-md-3">Eligibility</label>
    <div class="col-md-9"><textarea name="eligibility" class="form-control" rows="4" placeholder="Eligibility">{{ isset($asset) ? $asset->eligibility: '' }}</textarea>
</div></div>
  <div class="row mt-4">
    <label class="col-md-3">Curriculum</label>
    <div class="col-md-9">
        <textarea name="curriculum" class="form-control" rows="4" placeholder="Curriculum">{{ isset($asset) ? $asset->curriculum: '' }}</textarea>
</div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">FAQs</label>
    <div class="col-md-9">
        <textarea name="faqs" class="form-control" rows="4" placeholder="FAQs">{{ isset($asset) ? $asset->faqs: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Reason of Choosing This Course</label>
    <div class="col-md-9">
        <textarea name="reason_of_choosing_this_course" class="form-control" rows="4" placeholder="Why choose this course?">{{ isset($asset) ? $asset->reason_of_choosing_this_course: '' }}</textarea>
    </div>
</div>
  <div class="row mt-4">
    <label class="col-md-3">Job Sectors Description</label>
    <div class="col-md-9">
        <textarea name="job_sectors_description" class="form-control" rows="4" placeholder="Job Sectors Description">{{ isset($asset) ? $asset->job_sectors_description: '' }}</textarea>
    </div>
</div>

<div class="row mt-4">
    <label for="" class="col-md-3"> Asset Occupation Image</label>
    <div class="col-md-9">
        <input type="file" name="asset_occupation_image" class="form-control" accept="image/*" id="imagez" />
        @if(isset($asset))
            <img src="{{ asset($asset->asset_occupation_image) }}" alt="" style="height: 80px" />
         @endif
    </div>
                            
</div>

    <div class="row mt-4">
        <label for="" class="col-md-3">Short Description</label>
                           
        <div class="col-md-9">
            <textarea name="short_description" id="" class="form-control ckeditor" placeholder=" short description">{{ isset($asset) ? $asset->short_description : '' }}</textarea>
         </div>
                            
     </div>

    <div class="row mt-4">
        <label for="" class="col-md-3">Long Description</label>
        <div class="col-md-9">
            <textarea name="long_description" id="" class="form-control ckeditor" placeholder=" long description">{{ isset($asset) ? $asset->long_description : '' }}</textarea>
         </div>
                            
    </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Benefits & Conditions</label>
                           
                            <div class="col-md-9">
                                <textarea name="benefits_conditions" id="" class="form-control ckeditor" placeholder=" Benefits & Conditions">{{ isset($asset) ? $asset->benefits_conditions : '' }}</textarea>
                            </div>
                            
                        </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Necessary Documents</label>
                           
                            <div class="col-md-9">
                                <textarea name="necessary_documents" id="" class="form-control ckeditor" placeholder=" Necessary Documents">{{ isset($asset) ? $asset->necessary_documents : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
       <input id="someSwitchOptionLight" name="status" type="checkbox" 
       {{ isset($asset) && $asset->status == 1 ? 'checked' : '' }} />
<label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($asset) ? 'Update' : 'Create' }} Asset ">
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


