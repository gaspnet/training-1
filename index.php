<?php

$users = [
    '1' => ['username' => 'John Doe', 'email' => 'john@example.com'],
    '2' => ['username' => 'Joseph Doe', 'email' => 'joseph@example.com'],
    '3' => ['username' => 'Jane Doe', 'email' => 'jane@example.com']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>User management</h1>
            <a href="create.html" class="btn btn-success">Add User</a>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($users as $key => $value) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td>
                            <a href="edit.html" class="btn btn-warning">Edit</a>
                            <a href="#" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>