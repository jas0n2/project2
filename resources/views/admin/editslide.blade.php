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
                                   
                                  <form method="post" action="{{route('peditslider')}}" enctype="multipart/form-data">
                                    <h4 class="card-title">Content</h4>
                                    <div class="form-group">
                                    @csrf
                                        <textarea name="content" id="summernote" class="form-control" placeholder="Your Message Here ...">{!! $sliders->content!!}</textarea>
                                    </div>
                                    <h4 class="card-title">Image</h4>
                                    <input name="id" type="hidden"  value="{{$sliders->id}}" />
                                    <div class="form-group">
                                    <div class="fallback">
                                            <input name="image" type="file"  multiple />
                                        </div>
<br>
<hr>
                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                            <span class="text-muted font-13"><img width="300px" height="150px" src="{{asset('sliders/'.$sliders->image)}}"></span>
                                        </div>                                    </div>
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