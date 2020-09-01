@extends('layouts.app')

@section('title','Restaurantinfo')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- @include('layouts.partial.msg') --}}
                    <a href="{{ route('restaurantinfo.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit restaurantinfo</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('restaurantinfo.update',$restaurantinfo->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $restaurantinfo->email }}" class="@error('email') is-invalid @enderror">
                                            @error('email')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $restaurantinfo->phone }}" class="@error('phone') is-invalid @enderror">
                                            @error('phone')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <textarea name="address" id="" cols="30" rows="10" class="@error('address') is-invalid @enderror">
                                            {{ $restaurantinfo->address }}</textarea>
                                        {{-- <textarea class="form-control" name="address" class="@error('address') is-invalid @enderror">
                                            {{ $restaurantinfo->address }}
                                        </textarea> --}}
                                        @error('address')
                                        <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">FaceBook link</label>
                                           <input type="text" class="form-control" name="fb_link" value="{{ $restaurantinfo->fb_link }}" class="@error('fb_link') is-invalid @enderror">
                                           @error('fb_link')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Twitter link</label>
                                           <input type="text" class="form-control" name="tw_link" value="{{ $restaurantinfo->tw_link }}" class="@error('tw_link') is-invalid @enderror">
                                           @error('tw_link')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Google plus link</label>
                                           <input type="text" class="form-control" name="gplus_link" value="{{ $restaurantinfo->gplus_link }}" class="@error('gplus_link') is-invalid @enderror">
                                           @error('gplus_link')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Linkedin link</label>
                                           <input type="text" class="form-control" name="ln_link" value="{{ $restaurantinfo->ln_link }}" class="@error('ln_link') is-invalid @enderror">
                                           @error('ln_link')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
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
{{-- <script src="{{ asset('backend/tinymce/tinymce.js') }}"></script>
    <script>
    tinymce.init({
        selector:'textarea.description',

    });
</script> --}}
@endpush
