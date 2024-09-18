@extends('layouts.master_backend')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Form Card -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Category Form</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                <form method="POST" action="{{ url('admin/category/insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Enter category's name" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success mr-2">Add</button>
                            <a href="{{ url('admin/employee/index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
