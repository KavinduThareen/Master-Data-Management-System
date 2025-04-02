@extends('layouts.default')

@section("title", "Categories")

@section("content")
    <div class="container mt-4">
        <h2 class="text-center mb-4">Category Form</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                // Close the success alert after 1 second
                setTimeout(function() {
                    let alertElement = document.querySelector('.alert-success');
                    if (alertElement) {
                        alertElement.classList.add('fade');
                        alertElement.classList.remove('show');
                    }
                }, 1000);
            </script>
        @endif

        <!-- Form Start -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="code">Category Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter category code" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="Active" selected>Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
        <!-- Form End -->

        <hr class="my-4">

        <!-- Table Start -->
        <h3>Category List</h3>
        <table class="table table-bordered mt-3">
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
                    <td>{{ $category->status }}</td>
                    <td>
                        <!-- Edit Button (Optional) -->
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Form -->
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Table End -->
    </div>
@endsection
