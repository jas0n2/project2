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
                                    <div class="col-md-6 offset-2">
                                  <form method="post" action="{{route('pcoverpage')}}" enctype="multipart/form-data">
                                   @csrf
                                    <div class="form-group">
                                        <label> Cover Name </label>
                            <input type="text" name="covername" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Funeral Benefit PolicyHolder </label>
                            <input type="text" name="fbenefit_poliyholder" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Funeral Benefit Family Member </label>
                            <input type="text" name="fbenefit_family" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Hospitalization: </label>
                            <input type="text" name="hospitalization" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Accident </label>
                            <input type="text" name="acciddent" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Cover Description </label>
                            <input type="text" name="hospitalization_desc" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Total Life Cover</label>
                            <input type="text" name="lifecover" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Life Premium</label>
                            <input type="text" name="lifepremium" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Pensions Premium 1  </label>
                            <input type="text" name="ppremium1" class="form-control"/>
                                </div>
                                <div class="form-group">
                                        <label> Pensions Premium 2  </label>
                            <input type="text" name="ppremium2" class="form-control"/>
                                </div>
                                    

                                       
                                    <div class="text-right mt-20">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                    </div>
</form>
</div>
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