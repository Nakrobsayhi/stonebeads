<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
    <!-- Alert -->
    @include('sweetalert::alert')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.admin.header')



                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts.admin.footer')

</body>

</html>
