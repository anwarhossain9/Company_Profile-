@extends('backend.master')

@section('title', isset($serviceCategory) ? 'Edit' : 'Create'." ".'Service Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($serviceCategory) ? 'Edit' : 'Create' }} Service Category</h3>
                    <a href="{{ route('service_categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($serviceCategory) ? route('service_categories.update', $serviceCategory->id) : route('service_categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($serviceCategory))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label class="col-md-3">Service Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="service_category_name" class="form-control" placeholder="service Category Name" value="{{ isset($serviceCategory) ? $serviceCategory->service_category_name: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($serviceCategory) && $serviceCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($serviceCategory) ? 'Update' : 'Create' }} Service Category ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



