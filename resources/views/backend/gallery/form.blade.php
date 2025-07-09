@extends('backend.master')

@section('title', isset($gallery) ? 'Edit' : 'Create'." ".'Student Review')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($gallery) ? 'Edit' : 'Create' }} Student Review</h3>
                    <a href="{{ route('galleries.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($gallery) ? route('galleries.update', $gallery->id) : route('galleries.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($gallery))
                            @method('put')
                        @endif


                        <div class="row mt-3">

      <label for="" class="col-md-3"> Gallery Category Name</label>
      <div class="col-md-9">
          <select name="gallery_category_id" class=" form-control " data-toggle="select"
              data-placeholder="Choose ...">
              <option value="">Select a gallery category</option>
              @foreach ($galleryCategories as $gallerycategory)
                  <option value="{{ $gallerycategory->id }}"
                      {{ $errors->any() ? old('gallery_category_id') : (isset($gallery) && $gallery->gallery_category_id == $gallerycategory->id ? 'selected' : '') }}>
                      {{ $gallerycategory->gallery_category_name }}</option>
              @endforeach
          </select>
      </div>
  </div>

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3"> Gallery Image</label>
                            <div class="col-md-9">
                                <input type="file" name="gallery_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($gallery))
                                    <img src="{{ asset($gallery->gallery_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">Gallery  Title</label>
                            <div class="col-md-9">
                                <input type="text" name="gallery_title" class="form-control" placeholder="Gallery Title" value="{{ isset($gallery) ? $gallery->gallery_title: '' }}" />
                            </div>
                       </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="description" id="" class="form-control ckeditor" placeholder=" gallery description">{{ isset($gallery) ? $gallery->description : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($gallery) && $gallery->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($gallery) ? 'Update' : 'Create' }} Gallery ">
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


