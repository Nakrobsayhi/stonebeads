@extends('layouts.master_backend')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Table</h1>
    </div>

    <!-- Employee Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
            <a href="{{ url('admin/category/add') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Category
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $cat)

                        <tr>
                            <td>{{ $cat->category_id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>
                                <a href="{{ url('admin/category/edit/' . $cat->category_id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ url('admin/category/delete/' . $cat->category_id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?');">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
