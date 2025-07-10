@extends('backend.master')

@section('title', isset($service) ? 'Edit' : 'Create'." ".'Service')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($service) ? 'Edit' : 'Create' }} Service</h3>
                    <a href="{{ route('services.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($service))
                            @method('put')
                        @endif


                        <div class="row mt-3">

      <label for="" class="col-md-3"> Service Category Name</label>
      <div class="col-md-9">
          <select name="service_category_id" class=" form-control " data-toggle="select"
              data-placeholder="Choose ...">
              <option value="">Select a Service Category</option>
              @foreach ($serviceCategories as $serviceCategory)
                  <option value="{{ $serviceCategory->id }}"
                      {{ $errors->any() ? old('service_category_id') : (isset($service) && $service->service_category_id == $serviceCategory->id ? 'selected' : '') }}>
                      {{ $serviceCategory->service_category_name }}</option>
              @endforeach
          </select>
      </div>
  </div>

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($service))
                                    <img src="{{ asset($service->image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>


                       

                        <div class="row mt-4">
                            <label class="col-md-3">Service Provider Name</label>
                            <div class="col-md-9">
                                <input type="text" name="service_provider_name" class="form-control" placeholder="Name" value="{{ isset($service) ? $service->service_provider_name: '' }}" />
                            </div>
                       </div>




                    
                       <div class="row mt-4">
                            <label for="" class="col-md-3">Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="description" id="" class="form-control ckeditor" placeholder=" service description">{{ isset($service) ? $service->description : '' }}</textarea>
                            </div>
                            
                        </div>

                         <div class="row mt-4">
                            <label class="col-md-3">Service Title</label>
                            <div class="col-md-9">
                                <input type="text" name="service_title" class="form-control" placeholder="Service Title" value="{{ isset($service) ? $service->service_title: '' }}" />
                            </div>
                       </div>

                           <div class="row mt-4">
                            <label for="" class="col-md-3">Service Image</label>
                            <div class="col-md-9">
                                <input type="file" name="service_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($service))
                                    <img src="{{ asset($service->service_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Service Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="service_description" id="" class="form-control ckeditor" placeholder=" service description">{{ isset($service) ? $service->service_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Note</label>
                           
                            <div class="col-md-9">
                                <textarea name="note" id="" class="form-control ckeditor" placeholder=" service note">{{ isset($service) ? $service->note : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($service) && $service->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($service) ? 'Update' : 'Create' }} Service ">
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


