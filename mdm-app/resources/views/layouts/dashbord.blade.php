@extends('layouts.default')
@section("title", "Dashboard")
@section("content")

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-primary sidebar vh-100 text-white">
                <div class="sidebar-sticky p-3">
                    <h4 class="text-white">eProduct</h4>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Statistic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Stock</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Offer</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-10 ml-sm-auto px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Order</h2>
                </div>

                <!-- Orders Table -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-primary text-white">
                            <td>#1021</td>
                            <td>John McCandless</td>
                            <td>8981 Waterman Street, CA, USA</td>
                            <td>08 Aug 2020</td>
                            <td>$250.00</td>
                            <td>✅ Completed</td>
                        </tr>
                        <tr>
                            <td>#1022</td>
                            <td>Maria Doyle</td>
                            <td>3506 Thomas Street, TX, USA</td>
                            <td>07 Aug 2020</td>
                            <td>$320.00</td>
                            <td>⚠️ Pending</td>
                        </tr>
                        <tr>
                            <td>#1023</td>
                            <td>Kevin Stuart</td>
                            <td>2210 Miles Road, NY, USA</td>
                            <td>07 Aug 2020</td>
                            <td>$180.00</td>
                            <td>✅ Completed</td>
                        </tr>
                        <tr>
                            <td>#1024</td>
                            <td>Sarah Cook</td>
                            <td>7903 Lincoln Ave, FL, USA</td>
                            <td>06 Aug 2020</td>
                            <td>$210.00</td>
                            <td>⚠️ Pending</td>
                        </tr>
                        <tr>
                            <td>#1025</td>
                            <td>Robert Hudson</td>
                            <td>4301 Broadway St, WA, USA</td>
                            <td>05 Aug 2020</td>
                            <td>$340.00</td>
                            <td>✅ Completed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

@endsection

