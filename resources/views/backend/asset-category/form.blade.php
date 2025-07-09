@extends('backend.master')

@section('title', isset($assetCategory) ? 'Edit' : 'Create'." ".'Asset Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($assetCategory) ? 'Edit' : 'Create' }} Asset Category</h3>
                    <a href="{{ route('asset_categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($assetCategory) ? route('asset_categories.update', $assetCategory->id) : route('asset_categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($assetCategory))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label class="col-md-3">Asset Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="asset_category_name" class="form-control" placeholder="asset Category Name" value="{{ isset($assetCategory) ? $assetCategory->asset_category_name: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($assetCategory) && $assetCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($assetCategory) ? 'Update' : 'Create' }} Asset Category ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



