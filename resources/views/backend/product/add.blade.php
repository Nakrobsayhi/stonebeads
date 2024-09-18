@extends('layouts.master_backend')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Form Card -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Product Form</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="{{ url('admin/product/insert') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Enter product name" required>
                        </div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-control" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control" name="price" type="text" placeholder="Enter product price" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="image" required>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success mr-2">Add</button>
                            <a href="{{ url('admin/product/index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
