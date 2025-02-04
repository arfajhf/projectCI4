<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="text-center">Unauthorized Access</h3>
        <p>You do not have permission to access this page.</p>
        <a href="<?= site_url('auth/login') ?>" class="btn btn-primary">Back to Login</a>
    </div>
</body>
</html>
