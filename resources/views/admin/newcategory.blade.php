@extends('admin.master')


@section('styles')

<link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/summernote.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/fileupload.css')}}">


@endsection

@section('content')
<div class="row">
                        <div class="col-12 box-margin height-card">
                            <div class="card">
                                <div class="card-body">
                                   
                                  <form method="post" action="{{route('postcatgory')}}" enctype="multipart/form-data">
                                   @csrf
                                  <h4 class="card-title">Name</h4>
                                    <div class="form-group">
                            <input type="text" name="name" class="form-control"/>
                                </div>
                                
                                    

                                       
                                    <div class="text-right mt-20">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                    </div>
</form>
                            </div>
                        </div>

                        </div>


@endsection

@section('scripts')
<script src="{{asset('admin/assets/js/default-assets/summernote.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/summernote-active.js')}}"></script>

    <script src="{{asset('admin/assets/js/dropzone.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/dropzone-custom.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/dropzone-and-module.min.js')}}"></script>
@endsection