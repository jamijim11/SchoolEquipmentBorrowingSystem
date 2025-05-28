<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
    <!-- Add your CSS and JS links here -->
</head>
<body>
    @include('layouts.admin.sidebar')

    <div class="layout-page">
        @include('layouts.admin.navbar')

        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> View User</h4>

                <div class="card">
                    <div class="card-body">
                        <h5>User Details</h5>

                        <p><strong>ID:</strong> {{ $user->id }}</p>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Role:</strong> {{ $user->role ? $user->role->name : 'N/A' }}</p>
                        <p><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}</p>
                        <p><strong>Updated At:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}</p>

                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning mt-3">Edit User</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
