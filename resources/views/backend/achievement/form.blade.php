@extends('backend.master')

@section('title', isset($achievement) ? 'Edit' : 'Create'." ".'Achievement')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($achievement) ? 'Edit' : 'Create' }} Achievement</h3>
                    <a href="{{ route('achievements.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($achievement) ? route('achievements.update', $achievement->id) : route('achievements.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($achievement))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Achievement Image</label>
                            <div class="col-md-9">
                                <input type="file" name="achievement_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($achievement))
                                    <img src="{{ asset($achievement->achievement_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">Achievement Title</label>
                            <div class="col-md-9">
                                <input type="text" name="achievement_title" class="form-control" placeholder="Achievement Title" value="{{ isset($achievement) ? $achievement->achievement_title: '' }}" />
                            </div>
                       </div>


                      

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Achievement Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="achievement_description" id="" class="form-control ckeditor" placeholder=" Achievement Description">{{ isset($achievement) ? $achievement->achievement_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($achievement) && $achievement->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($achievement) ? 'Update' : 'Create' }} Achievement ">
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


