@extends('layouts.default')

@section("title", "Brands")

@section("content")

    <!-- Custom Styles & Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Global Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f9fc;
            color: #444;
        }
        h2, h3 {
            font-weight: 700;
            color: #333;
        }
        .container {
            max-width: 900px;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            background: #fff;
            margin-bottom: 2rem;
        }
        .card-body {
            padding: 2rem;
        }

        /* Form Styling */
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 12px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0,123,255,0.2);
        }
        .form-group label {
            font-weight: 600;
        }

        /* Button Styling */
        .btn {
            border-radius: 8px;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #003f80);
            transform: translateY(-2px);
        }
        .btn-warning {
            background: linear-gradient(135deg, #ffc107, #ff9800);
            border: none;
        }
        .btn-danger {
            background: linear-gradient(135deg, #ff6b6b, #ff4757);
            border: none;
        }
        .btn-sm {
            padding: 0.5rem 1rem;
        }

        /* Table Styling */
        .table {
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
        }
        .table thead {
            background: #007bff;
            color: #fff;
        }
        .table tbody tr:nth-child(odd) {
            background: #f9fbfd;
        }
        .table tbody tr:hover {
            background: #eef3f9;
        }
        .table td, .table th {
            padding: 1rem;
            vertical-align: middle;
        }
    </style>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Manage Brands</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Brand Form -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('brands.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="code">Brand Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter brand code" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="name">Brand Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter brand name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Active" selected>Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        <i class="bi bi-save me-1"></i> Save Brand
                    </button>
                </form>
            </div>
        </div>

        <hr class="my-4">

        <!-- Brand List Table -->
        <h3>Brand List</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Brand Code</th>
                    <th>Brand Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $brand->code }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                                <span class="badge bg-{{ $brand->status == 'Active' ? 'success' : 'danger' }}">
                                    {{ $brand->status }}
                                </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this brand?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
