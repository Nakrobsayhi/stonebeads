@extends('layouts.master_backend')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">เพิ่มรายชื่อพนังงาน</h1>
    </div>


    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-">
                    <form method="POST" action="{{ url('admin/employee/insert') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">name</label><input class="form-control" name="name" type="text" placeholder="กรอกชื่อสินค้า">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1">username</label><input class="form-control" name="username" type="text" placeholder="กรอกชื่อสินค้า">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1">phone</label><input class="form-control" name="phone" type="text" placeholder="กรอกราคาสินค้า">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1">email</label><input class="form-control" name="email" type="text" placeholder="กรอกราคาสินค้า">
                        </div>

                        <div class="mb-0">
                            <label for="exampleFormControlTextarea1">address</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleFormControlSelect1">ตำแหน่ง</label><select class="form-control" name="category_name">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">password</label><input class="form-control" name="password" type="text" placeholder="กรอกราคาสินค้า">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                        <a href="{{ url('admin/employee/index') }}">
                        <button type="button" class="btn btn-danger">ยกเลิก</button>
                    </form>
                </div>
                <!-- Card Body -->

            </div>
        </div>


    </div>

    <!-- Content Row -->


</div>
@endsection
