@extends('layouts.default')

@section("title", "Categories")

@section("content")
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
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
        .btn {
            border-radius: 8px;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        .table thead {
            background: #007bff;
            color: #fff;
        }
        .table tbody tr:nth-child(odd) {
            background: #f9fbfd;
        }
    </style>

    <div class="container mt-4">


        <!-- Back to Dashboard Button -->
        <div class="mb-3">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>


        <h2 class="text-center mb-4">Category Management</h2>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <script>
                setTimeout(() => document.querySelector('.alert-success')?.classList.add('fade'), 1000);
            </script>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="code">Category Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter category code" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Active" selected>Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">
                        <i class="bi bi-save"></i> Save Category
                    </button>
                </form>
            </div>
        </div>

        <hr class="my-4">
        <h3>Category List</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Category Code</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->code }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                                <span class="badge bg-{{ $category->status == 'Active' ? 'success' : 'danger' }}">
                                    {{ $category->status }}
                                </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">
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




