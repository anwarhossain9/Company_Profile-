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


