<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f0ff 0%, #f8fafc 100%);
            min-height: 100vh;
        }
        .navbar {
            background: #2563eb !important;
            box-shadow: 0 2px 8px rgba(37,99,235,0.10);
        }
        .navbar .navbar-brand, .navbar .btn-link, .navbar .btn, .navbar a {
            color: #fff !important;
        }
        .navbar .btn-link, .navbar .btn {
            transition: background 0.2s;
        }
        .navbar .btn-link:hover, .navbar .btn:hover {
            background: rgba(255,255,255,0.1);
        }
        .card {
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(37,99,235,0.08);
        }
        .btn-primary, .btn-success {
            border-radius: 20px;
            background: #2563eb;
            border: none;
        }
        .btn-primary:hover, .btn-success:hover {
            background: #1d4ed8;
        }
        .btn-warning {
            border-radius: 20px;
        }
        .btn-danger {
            border-radius: 20px;
        }
        .form-control {
            border-radius: 12px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table-primary {
            background: #e0e7ff !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo e(route('contacts.index')); ?>">Contacts</a>
            <div class="d-flex align-items-center gap-2">
                <?php if(auth()->guard()->check()): ?>
                    <span class="text-white me-2 small"><?php echo e(auth()->user()->name); ?></span>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-link">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\mathe\Herd\html\html\resources\views/layouts/app.blade.php ENDPATH**/ ?>