@extends('backend.master')

@section('title', 'Manage Service Card')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Service Card</h3>
                    <a href="{{ route('service_cards.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Service Title</th>
                        <th>service Card Title</th>
                        <th>Service Image</th>
                        <th>Service Description</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody> 
                        @foreach($serviceCards as $serviceCard)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $serviceCard->service->service_title ?? ''}}</td>
                                <td>{{ $serviceCard->service_card_title ?? ''}}</td>
                                <td><img src="{{ asset($serviceCard->service_image )}}" alt="" style="height: 60px"></td>
                                <td>{!! $serviceCard->service_description ?? ''!!}</td>
                                <td>{{ $serviceCard->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('service_cards.edit', $serviceCard->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('service_cards.destroy', $serviceCard->id) }}" method="post" id="deleteItem">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
