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
                                   
                                  <form method="post" action="{{route('posteditpost')}}" enctype="multipart/form-data">
                                   
                                  <h4 class="card-title">Title</h4>
                                    <div class="form-group">
                            <input type="text" value="{{$post->title}}" name="title" class="form-control"/>
                                </div>
                                  <h4 class="card-title">Content</h4>
                                    <div class="form-group">
                                    @csrf
                                        <textarea name="content" id="summernote" class="form-control" placeholder="Your Message Here ...">{!!$post->content!!}</textarea>
                                    </div>
                                    
                                    <input type="hidden" name="slug" value="{{$post->slug}}" class="form-control"/>
                            <input type="hidden" name="id" value="{{$post->id}}" class="form-control"/>
                            <input type="hidden" name="oldtitle" value="{{$post->title}}">

                                    <h4 class="card-title">Category</h4>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                        <select name="catid" class="form-control">
                                        @foreach($cats  as $cat)
    <option value="{{$cat->id}}" {{(($post->cat_id ==$cat->id )?'selected':'')}}>{{$cat->name}} </option>

                                        @endforeach

</select>
                                </div>
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