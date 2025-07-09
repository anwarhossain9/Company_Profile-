@extends('backend.master')

@section('title', isset($banner) ? 'Edit' : 'Create'." ".'banner')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($banner) ? 'Edit' : 'Create' }} Banner</h3>
                    <a href="{{ route('banners.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($banner) ? route('banners.update', $banner->id) : route('banners.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($banner))
                            @method('put')
                        @endif

  

                        <!-- <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="banner_image[]" multiple class="form-control" accept="image/*" id="imagez" />
                                @if(isset($banner))
                                    <img src="{{ asset($banner->banner_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div> -->
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="banner_image"  class="form-control" accept="image/*" id="imagez" />
                                @if(isset($banner))
                                    <img src="{{ asset($banner->banner_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <!-- <div class="row mt-4">
                            <label class="col-md-3">Banner Title</label>
                            <div class="col-md-9">
                                <input type="text" name="banner_title[]" multiple class="form-control" placeholder="Banner Title" value="{{ isset($banner) ? $banner->banner_title: '' }}" />
                            </div>
                       </div> -->

                        <div class="row mt-4">
                            <label class="col-md-3">Banner Title</label>
                            <div class="col-md-9">
                                <input type="text" name="banner_title" class="form-control" placeholder="Banner Title" value="{{ isset($banner) ? $banner->banner_title: '' }}" />
                            </div>
                       </div>

                        <!-- <div class="row mt-4">
                            <label for="" class="col-md-3">Banner Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="banner_description[]" multiple id="" class="form-control ckeditor" placeholder=" banner description">{{ isset($banner) ? $banner->banner_description : '' }}</textarea>
                            </div>
                            
                        </div> -->

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Banner Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="banner_description"  id="" class="form-control ckeditor" placeholder=" banner description">{{ isset($banner) ? $banner->banner_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($banner) && $banner->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($banner) ? 'Update' : 'Create' }} banner ">
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


