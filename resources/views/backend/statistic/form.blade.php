@extends('backend.master')

@section('title', isset($statistic) ? 'Edit' : 'Create'." ".'Statistic')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($statistic) ? 'Edit' : 'Create' }} Statistic</h3>
                    <a href="{{ route('statistics.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($statistic) ? route('statistics.update', $statistic->id) : route('statistics.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($statistic))
                            @method('put')
                        @endif

  
  

                        

                        <div class="row mt-4">
                            <label class="col-md-3">Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ isset($statistic) ? $statistic->title: '' }}" />
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Count </label>
                           
                            <div class="col-md-9">
                                <input type="number" name="count" class="form-control" placeholder="Count" value="{{ isset($statistic) ? $statistic->count: '' }}" />
                            </div>
                            
                        </div>

                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($statistic) && $statistic->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($statistic) ? 'Update' : 'Create' }} Statistic ">
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


