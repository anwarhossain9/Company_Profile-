@extends('backend.master')

@section('title', isset($latestEvent) ? 'Edit' : 'Create'." ".'Latest Event')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($latestEvent) ? 'Edit' : 'Create' }} Latest Event</h3>
                    <a href="{{ route('latest_events.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($latestEvent) ? route('latest_events.update', $latestEvent->id) : route('latest_events.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($latestEvent))
                            @method('put')
                        @endif

  

                        

                        <div class="row mt-4">
                            <label class="col-md-3">Latest Event</label>
                            <div class="col-md-9">
                                <input type="text" name="latest_event" class="form-control" placeholder="Latest Event" value="{{ isset($latestEvent) ? $latestEvent->latest_event: '' }}" />
                            </div>
                       </div>


                      

                       

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($latestEvent) && $latestEvent->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($latestEvent) ? 'Update' : 'Create' }} Latest Event ">
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


