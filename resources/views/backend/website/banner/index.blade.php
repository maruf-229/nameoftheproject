@push('title')
    Banner
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Banner</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Banner</li>
                </ol>
                {{--                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>--}}
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                    <b>Edit Banner</b>
                </div>
                <div class="card-body">
                    <form action="{{route('backend.banner.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Tilte</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ get_static_option('website_banner_title') }}">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ get_static_option('website_banner_description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">URL</label>
                            <input type="url" class="form-control" name="url" id="url" value="{{ get_static_option('website_banner_btn_url') }}">

                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">URL</label>
                            <input type="file" class="form-control" name="image" id="url" value="">

                        </div>


                        <button type="submit" class="btn btn-primary">Update Banner</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
@endsection
