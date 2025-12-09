<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4 text-center">All Users</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $id => $user)
                <tr>
                    <td>{{ $id + 1 }}</td>
                    <td>{{ $user->u_name }}</td>
                    <td>{{ $user->u_age }}</td>
                    <td>{{ $user->u_email }}</td>
                    <td>{{ $user->u_address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (optional, for components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
