@extends('backend.master')

@section('title', isset($teammember) ? 'Edit' : 'Create'." ".'Team Member')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($teammember) ? 'Edit' : 'Create' }} Team Member</h3>
                    <a href="{{ route('teammembers.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($teammember) ? route('teammembers.update', $teammember->id) : route('teammembers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($teammember))
                            @method('put')
                        @endif

  
  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Team Member Image</label>
                            <div class="col-md-9">
                                <input type="file" name="teammember_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($teammember))
                                    <img src="{{ asset($teammember->teammember_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                        <div class="row mt-4">
                            <label class="col-md-3">Team Member Name</label>
                            <div class="col-md-9">
                                <input type="text" name="teammember_name" class="form-control" placeholder="Team Member Name" value="{{ isset($teammember) ? $teammember->teammember_name: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Team Member Designation </label>
                           
                            <div class="col-md-9">
                                <input type="text" name="teammember_designation" class="form-control" placeholder="Team Member Designation" value="{{ isset($teammember) ? $teammember->teammember_designation: '' }}" />
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($teammember) && $teammember->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($teammember) ? 'Update' : 'Create' }} Team Member ">
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


