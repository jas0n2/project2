@extends('admin.master')

@section('styles')

    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/datatables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/select.bootstrap4.css')}}">
@endsection

@section('content')
<div class="row">
<div class="col-lg-12 height-card box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Tabs Bordered Justified</h4>

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item">
                                            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Logo
                                            </a>
                                        </li>
                                     
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home-b2">
                                            <form action="{{route('psettings')}}" method="post" enctype="multipart/form-data">
                                           <div class="row">
                                                   @csrf
                                           <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Logo {{$setting}} </label>
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Phone 1 </label>
                                                <input type="text" value="{{$setting->phone1}}" name="phone1" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Phone 2 </label>
                                                <input type="text" value="{{$setting->phone2}}" name="phone2" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Phone 3 </label>
                                                <input type="text" value="{{$setting->phone3}}" name="phone3" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Phone 4 </label>
                                                <input type="text" value="{{$setting->phone4}}" name="phone4" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Email 1 </label>
                                                <input type="text" value="{{$setting->email1}}" name="email1"  class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Email 2 </label>
                                                <input type="text"  value="{{$setting->email2}}" name="email2" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Email 3 </label>
                                                <input type="text"  value="{{$setting->email3}}" name="email3" class="form-control">
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                                   <label>Address </label>
                                               <textarea class="form-control" name="address">{{$setting->address}} </textarea>
                                            </div>

                                         </div>
                                         <div class="col-lg-6 offset-md-3">
                                               <div class="form-group">
                                               <button class="btn btn-primary">Submit </button>
                                            </div>

                                         </div>
</form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> 
                        <!-- end col -->
                        </div>

@endsection

@section('scripts')

    <script src="{{asset('admin/assets/js/default-assets/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/datatables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/datatable-responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/datatable-button.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/button.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/button.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/button.flash.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/button.print.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/datatables.keytable.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/datatables.select.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/demo.datatable-init.js')}}"></script>
@endsection