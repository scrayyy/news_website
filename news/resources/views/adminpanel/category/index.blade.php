@extends('adminpanel.layout.app')
@section('content')
    @push('css')
        		<!-- Internal Data table css -->
		<link href="{{ asset('assets/adminassets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/adminassets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/adminassets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/adminassets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @endpush
    <div class="container-fluid mg-t-20">

        <!-- breadcrumb -->
    
        <div class="breadcrumb-header justify-content-between">
    
                                <div class="left-content">
                <h4 class="content-title mb-2">Category List</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">AdminPanel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- breadcrumb -->
        <div class="row row-sm">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered text-nowrap" style="width:100%">
                                <thead>
                                    <tr class="bold">
                                        <th class="border-bottom-0">Category Name</th>
                                        <th class="border-bottom-0">Edit</th>
                                        <th class="border-bottom-0">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $categories as $cat)
                                    <tr>
                                        <td class="font-weight-bold"><div class="d-flex"><span class="mg-l-10 mg-t-7">{{ $cat->name }}</span></div></td>                                        <td>
                                            <form action="{{ route('admin.cat.edit' , $cat->id) }}" method="GET">
                                                @method('Patch')
                                                <input type="submit" value="Edit" class="btn btn-primary" onclick="return confirm('ნამდვილად გსურთ სიახლის რედაქტირება?')">                   
                                                </form>
                                            </td>                                        </td>
                                        <td>
                                        <form action="{{ route('admin.cat.destroy' , $cat->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('ნამდვილად გსურთ წაშლა?')">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row close -->
    </div>
    <!-- Container closed -->
    
    </div>
    <!-- main-content closed -->
@push('js')
<script src="{{ asset('assets/adminassets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>

<!--Internal  Datatable js -->
<script src="{{ asset('assets/adminassets/js/table-data.js') }}"></script>

<!-- Internal Select2.min js -->
<script src="{{ asset('assets/adminassets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/adminassets/js/select2.js') }}"></script>
@endpush
@endsection