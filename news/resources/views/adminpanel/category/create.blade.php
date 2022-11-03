@extends('adminpanel.layout.app')
@section('content')
<div class="container-fluid mg-t-20">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
            <h4 class="content-title mb-1">Add Category</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">AdminPanel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.cat.store') }}" method="post" class="parsley-style-1" id="selectForm2" name="selectForm2">
                        @csrf
                        <div class="">
                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6" id="fnWrapper">
                                    <label>Category Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" data-parsley-class-handler="#fnWrapper" name="name" required type="text">
                                </div>
                        </div>            
                        <div class="mg-t-30">
                            <button class="btn btn-main-primary pd-x-20" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@endsection