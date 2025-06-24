@extends('backend.master')

@section('title', isset($studentReview) ? 'Edit' : 'Create'." ".'Student Review')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($studentReview) ? 'Edit' : 'Create' }} Student Review</h3>
                    <a href="{{ route('student_reviews.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($studentReview) ? route('student_reviews.update', $studentReview->id) : route('student_reviews.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($studentReview))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($studentReview))
                                    <img src="{{ asset($studentReview->image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ isset($studentReview) ? $studentReview->name: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Review</label>
                           
                            <div class="col-md-9">
                                <textarea name="review" id="" class="form-control ckeditor" placeholder=" studentReview description">{{ isset($studentReview) ? $studentReview->review : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($studentReview) && $studentReview->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($studentReview) ? 'Update' : 'Create' }} Student Review ">
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


