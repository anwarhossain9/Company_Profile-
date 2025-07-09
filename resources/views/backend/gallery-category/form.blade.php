@extends('backend.master')

@section('title', isset($galleryCategory) ? 'Edit' : 'Create'." ".'Gallery Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($galleryCategory) ? 'Edit' : 'Create' }} Gallery Category</h3>
                    <a href="{{ route('gallery_categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($galleryCategory) ? route('gallery_categories.update', $galleryCategory->id) : route('gallery_categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($galleryCategory))
                            @method('put')
                        @endif


                        

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3"> Gallery Category Image</label>
                            <div class="col-md-9">
                                <input type="file" name="gallery_category_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($galleryCategory))
                                    <img src="{{ asset($galleryCategory->gallery_category_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">gallery Category  Name</label>
                            <div class="col-md-9">
                                <input type="text" name="gallery_category_name" class="form-control" placeholder="Gallery Category Name" value="{{ isset($galleryCategory) ? $galleryCategory->gallery_category_name: '' }}" />
                            </div>
                       </div>



                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($galleryCategory) && $galleryCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($galleryCategory) ? 'Update' : 'Create' }} Gallery Category ">
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


