@extends('backend.master')

@section('title', isset($contact) ? 'Edit' : 'Create'." ".'Contact')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($contact) ? 'Edit' : 'Create' }} Contact</h3>
                    <a href="{{ route('contacts.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($contact))
                            @method('put')
                        @endif

                     <div class="row mt-4">
                            <label class="col-md-3">Office Address</label>
                            <div class="col-md-9">
                                <input type="text" name="office_address" class="form-control" placeholder="Office Address" value="{{ isset($contact) ? $contact->office_address: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Phone No</label>
                            <div class="col-md-9">
                                <input type="text" name="phone_no" class="form-control" placeholder="Phone No" value="{{ isset($contact) ? $contact->phone_no: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Contact Person Name</label>
                            <div class="col-md-9">
                                <input type="text" name="contact_person_name" class="form-control" placeholder="Contact Person Name" value="{{ isset($contact) ? $contact->contact_person_name: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Contact Person Designation</label>
                            <div class="col-md-9">
                                <input type="text" name="contact_person_designation" class="form-control" placeholder="Contact Person Designation" value="{{ isset($contact) ? $contact->contact_person_designation: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Contact Time</label>
                            <div class="col-md-9">
                                <input type="text" name="contact_time" class="form-control" placeholder="Contact Time" value="{{ isset($contact) ? $contact->contact_time: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Email Link</label>
                            <div class="col-md-9">
                                <input type="text" name="email_link" class="form-control" placeholder="Email Link" value="{{ isset($contact) ? $contact->email_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Facebook Link</label>
                            <div class="col-md-9">
                                <input type="text" name="facebook_link" class="form-control" placeholder="Facebook Link" value="{{ isset($contact) ? $contact->facebook_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Instagram Link</label>
                            <div class="col-md-9">
                                <input type="text" name="instagram_link" class="form-control" placeholder="Instagram Link" value="{{ isset($contact) ? $contact->instagram_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Linkedin Link</label>
                            <div class="col-md-9">
                                <input type="text" name="linkedin_link" class="form-control" placeholder="Linkedin Link" value="{{ isset($contact) ? $contact->linkedin_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">YouTube Link</label>
                            <div class="col-md-9">
                                <input type="text" name="youtube_link" class="form-control" placeholder="Youtube Link" value="{{ isset($contact) ? $contact->youtube_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Twitter Link</label>
                            <div class="col-md-9">
                                <input type="text" name="twitter_link" class="form-control" placeholder="Twitter Link" value="{{ isset($contact) ? $contact->twitter_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Tictok Link</label>
                            <div class="col-md-9">
                                <input type="text" name="tictok_link" class="form-control" placeholder="Tictok Link" value="{{ isset($contact) ? $contact->tictok_link: '' }}" />
                            </div>
                       </div>

                       <div class="row mt-4">
                            <label class="col-md-3">Google Map Link</label>
                            <div class="col-md-9">
                                <input type="text" name="google_map_link" class="form-control" placeholder="Google Map Link" value="{{ isset($contact) ? $contact->google_map_link: '' }}" />
                            </div>
                       </div>

                     <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($contact) && $contact->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($contact) ? 'Update' : 'Create' }} Contact ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



