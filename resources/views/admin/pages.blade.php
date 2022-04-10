@extends('admin.master')

@section('styles')

    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/datatables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-assets/select.bootstrap4.css')}}">
@endsection

@section('content')

<div class="row">
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">Pages</h4>
                                       

                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Slug</th>
                                                    <th>Action</th>
                                                   
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach($pages as $page)
                                                <tr>
                                                    <td>{{$page->title}}</td>
                                                    <td>{{$page->slug}}</td>
                                                    <td>		 <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
	<a class="dropdown-item" href="{{route('editpage',['slug'=>$page->slug])}}"  >Edit</a>
    <a class="dropdown-item" href="{{route('deletepage',['slug'=>$page->slug])}}"  >Delete</a>

    
  </div>
</div></td>
                                                 
                                                </tr>
                                              @endforeach
                                             
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
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