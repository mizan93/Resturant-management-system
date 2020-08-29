@extends('layouts.app')

@section('title','Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    {{-- <a href="{{ route('reservation.create') }}" class="btn btn-primary">Add New</a> --}}
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All reservation <span class="badge badge-info display-4">{{ $reservation->count()}}</span></h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date and time</th>
                                <th>Message</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($reservation as $key=>$reservation)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                            @if ($reservation->status==true)
                                            <span class="label label-info">Confirmed</span>
                                            @else
                                            <span class="label label-primary">Pending</span>
                                            @endif
                                        </td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->date_and_time }}</td>
                                            <td>{{ $reservation->message }}</td>

                                            <td>
                                                @if ($reservation->status==false)
                                                <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.confirm',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf

                                                </form>
                                                <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you var to confirm this reservation?')){
                                                    event.preventDefault();
                                                    document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">mode_edit</i></button>
                                                    @else
                                                    <button  class="btn btn-success btn-sm" onclick="alert('Reservation has already been confirmed.')"><i class="material-icons">done</i></button>

                                                    @endif
                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destroy',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>

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
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
