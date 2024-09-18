<!-- Sidebar -->
<ul class="navbar-nav sidebar bg-light sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <!-- Optionally include an icon here -->
        </div>
        <div class="sidebar-brand-text mx-3">STONE BEADS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.employee.index') }}">
            <i class="fa fa-users"></i>
            <span>Employee</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/category/index') }}">
            <i class="fa fa-tags"></i>
            <span>Category</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/product/index') }}">
            <i class="fa fa-box"></i>
            <span>Product</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

<!-- Custom CSS (optional, for lighter colors) -->
<style>
    .sidebar {
        background-color: grey; /* Light background color */
    }
    .sidebar-light .nav-link {
        color: #495057; /* Darker text for readability */
    }
    .sidebar-light .nav-link:hover {
        background-color: #e9ecef; /* Light gray background on hover */
        color: #212529; /* Darker text color on hover */
    }
    .sidebar-brand {
        background-color: #ffffff; /* White background for brand section */
        color: #000000; /* Black text color for contrast */
    }
    .sidebar-divider {
        border-top: 1px solid #dee2e6; /* Light gray border */
    }
    .collapse-inner {
        background-color: #f8f9fa; /* Light background color for collapse menu */
    }
</style>
