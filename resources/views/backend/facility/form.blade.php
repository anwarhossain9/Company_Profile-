@extends('backend.master')

@section('title', isset($facility) ? 'Edit' : 'Create'." ".'Facilty')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($facility) ? 'Edit' : 'Create' }} facility Card</h3>
                    <a href="{{ route('facilities.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($facility) ? route('facilities.update', $facility->id) : route('facilities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($facility))
                            @method('put')
                        @endif


  
                         <div class="row mt-4">
                            <label class="col-md-3">Facilty  Title</label>
                            <div class="col-md-9">
                                <input type="text" name="facility_title" class="form-control" placeholder="Facility Title" value="{{ isset($facility) ? $facility->facility_title: '' }}" />
                            </div>
                       </div>

                           <div class="row mt-4">
                            <label for="" class="col-md-3">Facility  Image</label>
                            <div class="col-md-9">
                                <input type="file" name="facility_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($facility))
                                    <img src="{{ asset($facility->facility_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Facility Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="facility_description" id="" class="form-control ckeditor" placeholder=" facility Card description">{{ isset($facility) ? $facility->facility_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($facility) && $facility->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($facility) ? 'Update' : 'Create' }} Facility ">
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


