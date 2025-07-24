@extends('backend.master')

@section('title', isset($serviceCard) ? 'Edit' : 'Create'." ".'Service Card')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($serviceCard) ? 'Edit' : 'Create' }} Service Card</h3>
                    <a href="{{ route('service_cards.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($serviceCard) ? route('service_cards.update', $serviceCard->id) : route('service_cards.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($serviceCard))
                            @method('put')
                        @endif


                        <div class="row mt-3">

      <label for="" class="col-md-3"> Service Title</label>
      <div class="col-md-9">
          <select name="service_id" class=" form-control " data-toggle="select"
              data-placeholder="Choose ...">
              <option value="">Select a Service</option>
              @foreach ($services as $service)
                  <option value="{{ $service->id }}"
                      {{ $errors->any() ? old('service_id') : (isset($serviceCard) && $service->service_id == $service->id ? 'selected' : '') }}>
                      {{ $service->service_title }}</option>
              @endforeach
          </select>
      </div>
  </div>

  
                         <div class="row mt-4">
                            <label class="col-md-3">Service Card Title</label>
                            <div class="col-md-9">
                                <input type="text" name="service_card_title" class="form-control" placeholder="Service Title" value="{{ isset($serviceCard) ? $serviceCard->service_card_title: '' }}" />
                            </div>
                       </div>

                           <div class="row mt-4">
                            <label for="" class="col-md-3">Service  Image</label>
                            <div class="col-md-9">
                                <input type="file" name="service_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($serviceCard))
                                    <img src="{{ asset($serviceCard->service_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Service Description</label>
                           
                            <div class="col-md-9">
                                <textarea name="service_description" id="" class="form-control ckeditor" placeholder=" Service Card description">{{ isset($serviceCard) ? $serviceCard->service_description : '' }}</textarea>
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($serviceCard) && $serviceCard->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($serviceCard) ? 'Update' : 'Create' }} serviceCard ">
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


