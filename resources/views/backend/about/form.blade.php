@extends('backend.master')

@section('title', isset($about) ? 'Edit' : 'Create'." ".'About')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($about) ? 'Edit' : 'Create' }} About</h3>
                    <a href="{{ route('abouts.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($about) ? route('abouts.update', $about->id) : route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($about))
                            @method('put')
                        @endif

  

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Company Related Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image_related_company" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($about))
                                    <img src="{{ asset($about->image_related_company) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>


                         <div class="row mt-4">
                            <label for="" class="col-md-3">Story Related Image</label>
                            <div class="col-md-9">
                                <input type="file" name="story_related_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($about))
                                    <img src="{{ asset($about->story_related_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                       
                        <div class="row mt-4">
                            <label class="col-md-3">Company Dream</label>
                        <textarea name="company_dream" id="" class="form-control ckeditor" placeholder=" Company Dream">{{ isset($about) ? $about->company_dream : '' }}</textarea>

                            <div class="col-md-9">
                            </div>
                       </div>

                        <div class="row mt-4">
                            <label for="" class="col-md-3">Company Story</label>
                           
                            <div class="col-md-9">
                                <textarea name="company_story" id="" class="form-control ckeditor" placeholder=" Company Story">{{ isset($about) ? $about->company_story : '' }}</textarea>
                            </div>
                            
                        </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Goal</label>
                           
                            <div class="col-md-9">
                                <textarea name="goal" id="" class="form-control ckeditor" placeholder=" Goal">{{ isset($about) ? $about->goal : '' }}</textarea>
                            </div>
                            
                        </div>

                         <div class="row mt-4">
                            <label for="" class="col-md-3">Purpose</label>
                           
                            <div class="col-md-9">
                                <textarea name="purpose" id="" class="form-control ckeditor" placeholder=" Purpose">{{ isset($about) ? $about->purpose : '' }}</textarea>
                            </div>
                            
                        </div>

                         <div class="row mt-4">
                            <label for="" class="col-md-3">Mission</label>
                           
                            <div class="col-md-9">
                                <textarea name="mission" id="" class="form-control ckeditor" placeholder=" Mission">{{ isset($about) ? $about->mission : '' }}</textarea>
                            </div>

                         </div>


                         <div class="row mt-4">
                            <label for="" class="col-md-3">Vission</label>
                           
                            <div class="col-md-9">
                                <textarea name="vission" id="" class="form-control ckeditor" placeholder="Vission">{{ isset($about) ? $about->vission : '' }}</textarea>
                            </div>

                         </div>


                        <div class="row mt-4">
                            <label class="col-md-3">Ceo Name</label>
                            <div class="col-md-9">
                                <input type="text" name="ceo_name" class="form-control" placeholder="Ceo Name" value="{{ isset($about) ? $about->ceo_name: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Ceo Designation</label>
                            <div class="col-md-9">
                                <input type="text" name="ceo_designation" class="form-control" placeholder="Ceo Name" value="{{ isset($about) ? $about->ceo_designation: '' }}" />
                            </div>
                       </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Ceo Image</label>
                            <div class="col-md-9">
                                <input type="file" name="ceo_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($about))
                                    <img src="{{ asset($about->ceo_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                            
                       

                         <div class="row mt-4">
                            <label for="" class="col-md-3">Ceo's Word</label>
                           
                            <div class="col-md-9">
                                <textarea name="ceo_word" id="" class="form-control ckeditor" placeholder=" about description">{{ isset($about) ? $about->ceo_word : '' }}</textarea>
                            </div>
                            
                        </div>


                          <div class="row mt-4">
                            <label class="col-md-3">Director Name</label>
                            <div class="col-md-9">
                                <input type="text" name="director_name" class="form-control" placeholder="Ceo Name" value="{{ isset($about) ? $about->director_name: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Director Designation</label>
                            <div class="col-md-9">
                                <input type="text" name="director_designation" class="form-control" placeholder="Ceo Name" value="{{ isset($about) ? $about->director_designation: '' }}" />
                            </div>
                       </div>


                        <div class="row mt-4">
                            <label for="" class="col-md-3">Director Image</label>
                            <div class="col-md-9">
                                <input type="file" name="director_image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($about))
                                    <img src="{{ asset($about->director_image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            
                        </div>

                            
                       

                         <div class="row mt-4">
                            <label for="" class="col-md-3">Director's Word</label>
                           
                            <div class="col-md-9">
                                <textarea name="director_word" id="" class="form-control ckeditor" placeholder="Director Word">{{ isset($about) ? $about->director_word : '' }}</textarea>
                            </div>
                            
                        </div>




                        
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($about) && $about->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($about) ? 'Update' : 'Create' }} About ">
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


