{{--@extends('layouts.default')--}}
{{--@section('title', 'Dashboard')--}}
{{--@section('content')--}}

{{--    <!-- Custom Styles & Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">--}}

{{--    <style>--}}
{{--        /* Global Styling */--}}
{{--        body {--}}
{{--            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;--}}
{{--            background: #eef2f7;--}}
{{--            color: #333;--}}
{{--        }--}}
{{--        h2, h3, h4 {--}}
{{--            font-weight: 700;--}}
{{--        }--}}
{{--        /* Sidebar Styling */--}}
{{--        .sidebar {--}}
{{--            background: #192231;--}}
{{--        }--}}
{{--        .sidebar .sidebar-sticky {--}}
{{--            position: sticky;--}}
{{--            top: 0;--}}
{{--            height: 100%;--}}
{{--        }--}}
{{--        .sidebar ul.nav .nav-link {--}}
{{--            padding: 12px 20px;--}}
{{--            margin-bottom: 8px;--}}
{{--            border-radius: 8px;--}}
{{--            transition: all 0.3s ease;--}}
{{--        }--}}
{{--        .sidebar ul.nav .nav-link:hover,--}}
{{--        .sidebar ul.nav .nav-link.active {--}}
{{--            background: rgba(255, 255, 255, 0.15);--}}
{{--            border-left: 4px solid #00b4db;--}}
{{--        }--}}
{{--        /* Page Header */--}}
{{--        .page-header {--}}
{{--            background: linear-gradient(90deg, #00b4db, #0083b0);--}}
{{--            padding: 25px 30px;--}}
{{--            border-radius: 12px;--}}
{{--            color: #fff;--}}
{{--            margin-bottom: 40px;--}}
{{--            box-shadow: 0 6px 12px rgba(0,0,0,0.1);--}}
{{--        }--}}
{{--        .page-header h2 {--}}
{{--            margin: 0;--}}
{{--            font-size: 1.8rem;--}}
{{--        }--}}
{{--        /* Custom Buttons */--}}
{{--        .btn-custom {--}}
{{--            background: linear-gradient(45deg, #00b4db, #0083b0);--}}
{{--            border: none;--}}
{{--            color: #fff;--}}
{{--            font-weight: 600;--}}
{{--            padding: 0.75rem 1.5rem;--}}
{{--            border-radius: 10px;--}}
{{--            transition: transform 0.2s ease, box-shadow 0.2s ease;--}}
{{--            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}
{{--        .btn-custom:hover {--}}
{{--            transform: translateY(-3px);--}}
{{--            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);--}}
{{--        }--}}
{{--        .btn-custom:active {--}}
{{--            transform: translateY(0);--}}
{{--            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}
{{--        .btn-export {--}}
{{--            background: linear-gradient(45deg, #ff758c, #ff7eb3);--}}
{{--        }--}}
{{--        /* Table Styling */--}}
{{--        .table-responsive {--}}
{{--            background: #fff;--}}
{{--            border-radius: 12px;--}}
{{--            overflow: hidden;--}}
{{--            box-shadow: 0 4px 10px rgba(0,0,0,0.08);--}}
{{--        }--}}
{{--        .table thead {--}}
{{--            background: #2d3e50;--}}
{{--            color: #fff;--}}
{{--        }--}}
{{--        .table-striped tbody tr:nth-of-type(odd) {--}}
{{--            background-color: #f9fbfd;--}}
{{--        }--}}
{{--        .table-hover tbody tr:hover {--}}
{{--            background-color: #f1f5f9;--}}
{{--        }--}}
{{--        .badge {--}}
{{--            font-size: 0.9rem;--}}
{{--            padding: 0.5em 0.75em;--}}
{{--            border-radius: 12px;--}}
{{--        }--}}
{{--    </style>--}}

{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <!-- Sidebar -->--}}
{{--            <nav class="col-md-2 d-none d-md-block sidebar vh-100 text-white shadow">--}}
{{--                <div class="sidebar-sticky p-4">--}}
{{--                    <h4 class="mb-4">eProduct</h4>--}}
{{--                    <ul class="nav flex-column">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white active" href="/dashboard">--}}
{{--                                <i class="bi bi-speedometer2 me-2"></i>Dashboard--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white" href="/brands">--}}
{{--                                <i class="bi bi-building me-2"></i>Brands--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white" href="/categories">--}}
{{--                                <i class="bi bi-list-check me-2"></i>Categories--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white" href="/items">--}}
{{--                                <i class="bi bi-box-seam me-2"></i>Items--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}

{{--            <!-- Main Content -->--}}
{{--            <main class="col-md-10 ms-sm-auto px-md-4 py-4">--}}
{{--                <!-- Page Header -->--}}
{{--                <div class="page-header d-flex justify-content-between align-items-center">--}}
{{--                    <h2>Orders</h2>--}}
{{--                    <div>--}}
{{--                        <button class="btn btn-custom btn-export me-3">--}}
{{--                            <i class="bi bi-download me-1"></i>Export--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-custom">--}}
{{--                            <i class="bi bi-plus-circle me-1"></i>Add Order--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Orders Table -->--}}
{{--                <div class="table-responsive shadow-sm rounded">--}}
{{--                    <table class="table table-striped table-hover mb-0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Address</th>--}}
{{--                            <th>Date</th>--}}
{{--                            <th>Price</th>--}}
{{--                            <th>Status</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr class="table-primary">--}}
{{--                            <td>#1021</td>--}}
{{--                            <td>John McCandless</td>--}}
{{--                            <td>8981 Waterman Street, CA, USA</td>--}}
{{--                            <td>08 Aug 2020</td>--}}
{{--                            <td>$250.00</td>--}}
{{--                            <td><span class="badge bg-success">Completed</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1022</td>--}}
{{--                            <td>Maria Doyle</td>--}}
{{--                            <td>3506 Thomas Street, TX, USA</td>--}}
{{--                            <td>07 Aug 2020</td>--}}
{{--                            <td>$320.00</td>--}}
{{--                            <td><span class="badge bg-warning text-dark">Pending</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1023</td>--}}
{{--                            <td>Kevin Stuart</td>--}}
{{--                            <td>2210 Miles Road, NY, USA</td>--}}
{{--                            <td>07 Aug 2020</td>--}}
{{--                            <td>$180.00</td>--}}
{{--                            <td><span class="badge bg-success">Completed</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1024</td>--}}
{{--                            <td>Sarah Cook</td>--}}
{{--                            <td>7903 Lincoln Ave, FL, USA</td>--}}
{{--                            <td>06 Aug 2020</td>--}}
{{--                            <td>$210.00</td>--}}
{{--                            <td><span class="badge bg-warning text-dark">Pending</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1025</td>--}}
{{--                            <td>Robert Hudson</td>--}}
{{--                            <td>4301 Broadway St, WA, USA</td>--}}
{{--                            <td>05 Aug 2020</td>--}}
{{--                            <td>$340.00</td>--}}
{{--                            <td><span class="badge bg-success">Completed</span></td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}






























































{{--//correct code  this--}}








































{{--@extends('layouts.default')--}}

{{--@section('title', 'Dashbord')--}}

{{--@section('content')--}}

{{--    <!-- Custom Styles & Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">--}}

{{--    <style>--}}
{{--        /* Global Styling */--}}
{{--        body {--}}
{{--            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;--}}
{{--            background: #eef2f7;--}}
{{--            color: #333;--}}
{{--        }--}}
{{--        h2, h3, h4 {--}}
{{--            font-weight: 700;--}}
{{--        }--}}
{{--        /* Sidebar Styling */--}}
{{--        .sidebar {--}}
{{--            background: #192231;--}}
{{--        }--}}
{{--        .sidebar .sidebar-sticky {--}}
{{--            position: sticky;--}}
{{--            top: 0;--}}
{{--            height: 100%;--}}
{{--        }--}}
{{--        .sidebar ul.nav .nav-link {--}}
{{--            padding: 12px 20px;--}}
{{--            margin-bottom: 8px;--}}
{{--            border-radius: 8px;--}}
{{--            transition: all 0.3s ease;--}}
{{--        }--}}
{{--        .sidebar ul.nav .nav-link:hover,--}}
{{--        .sidebar ul.nav .nav-link.active {--}}
{{--            background: rgba(255, 255, 255, 0.15);--}}
{{--            border-left: 4px solid #00b4db;--}}
{{--        }--}}
{{--        /* Page Header */--}}
{{--        .page-header {--}}
{{--            background: linear-gradient(90deg, #00b4db, #0083b0);--}}
{{--            padding: 25px 30px;--}}
{{--            border-radius: 12px;--}}
{{--            color: #fff;--}}
{{--            margin-bottom: 40px;--}}
{{--            box-shadow: 0 6px 12px rgba(0,0,0,0.1);--}}
{{--        }--}}
{{--        .page-header h2 {--}}
{{--            margin: 0;--}}
{{--            font-size: 1.8rem;--}}
{{--        }--}}
{{--        /* Custom Buttons */--}}
{{--        .btn-custom {--}}
{{--            background: linear-gradient(45deg, #00b4db, #0083b0);--}}
{{--            border: none;--}}
{{--            color: #fff;--}}
{{--            font-weight: 600;--}}
{{--            padding: 0.75rem 1.5rem;--}}
{{--            border-radius: 10px;--}}
{{--            transition: transform 0.2s ease, box-shadow 0.2s ease;--}}
{{--            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}
{{--        .btn-custom:hover {--}}
{{--            transform: translateY(-3px);--}}
{{--            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);--}}
{{--        }--}}
{{--        .btn-custom:active {--}}
{{--            transform: translateY(0);--}}
{{--            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}
{{--        .btn-export {--}}
{{--            background: linear-gradient(45deg, #ff758c, #ff7eb3);--}}
{{--        }--}}
{{--        /* Table Styling */--}}
{{--        .table-responsive {--}}
{{--            background: #fff;--}}
{{--            border-radius: 12px;--}}
{{--            overflow: hidden;--}}
{{--            box-shadow: 0 4px 10px rgba(0,0,0,0.08);--}}
{{--        }--}}
{{--        .table thead {--}}
{{--            background: #2d3e50;--}}
{{--            color: #fff;--}}
{{--        }--}}
{{--        .table-striped tbody tr:nth-of-type(odd) {--}}
{{--            background-color: #f9fbfd;--}}
{{--        }--}}
{{--        .table-hover tbody tr:hover {--}}
{{--            background-color: #f1f5f9;--}}
{{--        }--}}
{{--        .badge {--}}
{{--            font-size: 0.9rem;--}}
{{--            padding: 0.5em 0.75em;--}}
{{--            border-radius: 12px;--}}
{{--        }--}}
{{--    </style>--}}

{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <!-- Sidebar -->--}}
{{--            <nav class="col-md-2 d-none d-md-block sidebar vh-100 text-white shadow">--}}
{{--                <div class="sidebar-sticky p-4">--}}
{{--                    <h4 class="mb-4">eProduct</h4>--}}
{{--                    <ul class="nav flex-column">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link text-white active" href="/dashboard">--}}
{{--                                <i class="bi bi-speedometer2 me-2"></i>Dashboard--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        @if(Auth::user()->is_admin)--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link text-white" href="/brands">--}}
{{--                                    <i class="bi bi-building me-2"></i>Brands--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link text-white" href="/categories">--}}
{{--                                    <i class="bi bi-list-check me-2"></i>Categories--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link text-white" href="/items">--}}
{{--                                    <i class="bi bi-box-seam me-2"></i>Items--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                        @endif--}}

{{--                        <li class="nav-item mt-4">--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}
{{--                                <button type="submit" class="btn btn-danger w-100">--}}
{{--                                    <i class="bi bi-box-arrow-right me-2"></i>Logout--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}





{{--            <!-- Main Content -->--}}
{{--            <main class="col-md-10 ms-sm-auto px-md-4 py-4">--}}
{{--                <!-- Page Header -->--}}
{{--                <div class="page-header d-flex justify-content-between align-items-center">--}}
{{--                    <h2>Orders</h2>--}}
{{--                    <div>--}}
{{--                        <button class="btn btn-custom btn-export me-3">--}}
{{--                            <i class="bi bi-download me-1"></i>Export--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-custom">--}}
{{--                            <i class="bi bi-plus-circle me-1"></i>Add Order--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Orders Table -->--}}
{{--                <div class="table-responsive shadow-sm rounded">--}}
{{--                    <table class="table table-striped table-hover mb-0">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Address</th>--}}
{{--                            <th>Date</th>--}}
{{--                            <th>Price</th>--}}
{{--                            <th>Status</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr class="table-primary">--}}
{{--                            <td>#1021</td>--}}
{{--                            <td>John McCandless</td>--}}
{{--                            <td>8981 Waterman Street, CA, USA</td>--}}
{{--                            <td>08 Aug 2020</td>--}}
{{--                            <td>$250.00</td>--}}
{{--                            <td><span class="badge bg-success">Completed</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1022</td>--}}
{{--                            <td>Maria Doyle</td>--}}
{{--                            <td>3506 Thomas Street, TX, USA</td>--}}
{{--                            <td>07 Aug 2020</td>--}}
{{--                            <td>$320.00</td>--}}
{{--                            <td><span class="badge bg-warning text-dark">Pending</span></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>#1023</td>--}}
{{--                            <td>Kevin Stuart</td>--}}
{{--                            <td>2210 Miles Road, NY, USA</td>--}}
{{--                            <td>07 Aug 2020</td>--}}
{{--                            <td>$180.00</td>--}}
{{--                            <td><span class="badge bg-success">Completed</span></td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}
















































@extends('layouts.default')

@section('title', 'Dashboard')

@section('content')

    <!-- Custom Styles & Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Global Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        /* Header Styling */
        .page-header {
            background: linear-gradient(45deg, #00b4db, #0083b0);
            color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .page-header h2 {
            font-size: 2rem;
            font-weight: 600;
        }

        /* Sidebar Styling */
        .sidebar {
            background: #192231;
            color: white;
        }

        .sidebar .nav-item a {
            padding: 14px;
            margin-bottom: 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-item a:hover,
        .sidebar .nav-item a.active {
            background: rgba(255, 255, 255, 0.15);
            border-left: 4px solid #00b4db;
        }

        /* Button Styling */
        .btn-custom {
            background: linear-gradient(45deg, #00b4db, #0083b0);
            color: #fff;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 10px;
            border: none;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-custom:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-custom:active {
            transform: translateY(2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-export {
            background: linear-gradient(45deg, #ff758c, #ff7eb3);
        }

        /* Table Styling */
        .table-responsive {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background: #2d3e50;
            color: #fff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9fbfd;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f5f9;
        }

        .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
            border-radius: 12px;
        }

        /* Enhanced Table Cells */
        .table th, .table td {
            vertical-align: middle;
        }

    </style>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar vh-100 shadow">
                <div class="sidebar-sticky p-4">
                    <h4 class="mb-4">eProduct</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="/dashboard">
                                <i class="bi bi-speedometer2 me-2"></i>Dashboard
                            </a>
                        </li>
                        @if(Auth::user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/brands">
                                    <i class="bi bi-building me-2"></i>Brands
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/categories">
                                    <i class="bi bi-list-check me-2"></i>Categories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/items">
                                    <i class="bi bi-box-seam me-2"></i>Items
                                </a>
                            </li>
                        @endif
                        <li class="nav-item mt-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger w-100">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="page-header d-flex justify-content-between align-items-center">
                    <h2>Orders</h2>
                    <div>
                        <button class="btn btn-export me-3"><i class="bi bi-download me-1"></i>Export</button>
                        <button class="btn btn-custom"><i class="bi bi-plus-circle me-1"></i>Add Order</button>
                    </div>
                </div>



                <!-- Categories Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4>Categories</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($categories as $category)
                                <li class="list-group-item">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Brands Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white">
                        <h4>Brands</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($brands as $brand)
                                <li class="list-group-item">{{ $brand->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Items Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning text-white">
                        <h4>Items</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->brand->name }}</td>
                                    <td>${{ number_format($item->price, 2) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

@endsection
