@extends('layouts.app')

@section('title','Slider')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('slider.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Slider</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" value="{{ $slider->title }}" name="title"class="@error('title') is-invalid @enderror">
                                             @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Sub Title</label>
                                           <input type="text" class="form-control" value="{{ $slider->sub_title }}" name="sub_title" class="@error('sub_title') is-invalid @enderror">
                                             @error('sub_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" class="@error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
