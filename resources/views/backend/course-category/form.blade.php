@extends('backend.master')

@section('title', isset($courseCategory) ? 'Edit' : 'Create'." ".'Course Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($courseCategory) ? 'Edit' : 'Create' }} Course Category</h3>
                    <a href="{{ route('course_categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($courseCategory) ? route('course_categories.update', $courseCategory->id) : route('course_categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($courseCategory))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label class="col-md-3">Course Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="course_category_name" class="form-control" placeholder="Course Category Name" value="{{ isset($courseCategory) ? $courseCategory->course_category_name: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                         <label for="" class="col-md-3"> Course Category Image</label>
                       <div class="col-md-9">
                          <input type="file" name="course_category_image" class="form-control" accept="image/*" id="imagez" />
                       @if(isset($courseCategory))
                          <img src="{{ asset($courseCategory->course_category_image) }}" alt="" style="height: 80px" />
                        @endif
                      </div>
                            
                      </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($courseCategory) && $courseCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($courseCategory) ? 'Update' : 'Create' }} Course Category ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



