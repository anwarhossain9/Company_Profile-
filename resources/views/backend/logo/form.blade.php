@extends('backend.master')

@section('title', isset($logo) ? 'Edit' : 'Create'." ".'Logo')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($logo) ? 'Edit' : 'Create' }} Logo</h3>
                    <a href="{{ route('logos.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($logo) ? route('logos.update', $logo->id) : route('logos.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($logo))
                            @method('put')
                        @endif
  
  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Logo Image</label>
                            <div class="col-md-9">
                                <input type="file" name="logo_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($logo))
                                    <img src="{{ asset($logo->logo_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        

                       

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($logo) && $logo->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($logo) ? 'Update' : 'Create' }} Logo ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



