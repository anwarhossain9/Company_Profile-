@extends('backend.master')

@section('title', isset($industrialAttachmentCategory) ? 'Edit' : 'Create'." ".'Industrial Attachment Category')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($industrialAttachmentCategory) ? 'Edit' : 'Create' }} industrialAttachment Category</h3>
                    <a href="{{ route('industrial_attachment_categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($industrialAttachmentCategory) ? route('industrial_attachment_categories.update', $industrialAttachmentCategory->id) : route('industrial_attachment_categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($industrialAttachmentCategory))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label class="col-md-3">Industrial Attachment Category Name</label>
                            <div class="col-md-9">
                                <input type="text" name="industrial_attachment_category_name" class="form-control" placeholder="Industrial Attachment Category Name" value="{{ isset($industrialAttachmentCategory) ? $industrialAttachmentCategory->industrial_attachment_category_name: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($industrialAttachmentCategory) && $industrialAttachmentCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($industrialAttachmentCategory) ? 'Update' : 'Create' }} Industrial Attachment Category ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



