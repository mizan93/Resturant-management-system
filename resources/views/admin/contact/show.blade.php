@extends('layouts.app')

@section('title','Contact')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                                        <a href="{{ route('contact.index') }}" class="btn btn-primary">BACK</a>

                    <div class="card">
                            <div class="card-body" style="margin:30px;padding:30px;">
                                <h4 class="card-title">===== Contact Message =====</h4>

                        <p>Name:  {{ $contact->name }}</p>
                        <p>email:  {{ $contact->email }}</p>
                        <p>Phone:  {{ $contact->phone }}</p>
                        <p>Message: {{ $contact->message }}</p>
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
