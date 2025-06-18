

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card p-4 mx-auto" style="max-width: 500px;">
        <h2 class="mb-4 text-primary fw-bold">Contact Details</h2>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>ID:</strong> <?php echo e($contact->id); ?></li>
            <li class="list-group-item"><strong>Name:</strong> <?php echo e($contact->name); ?></li>
            <li class="list-group-item"><strong>Contact:</strong> <?php echo e($contact->contact); ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo e($contact->email); ?></li>
        </ul>
        <div class="d-flex justify-content-between">
            <a href="<?php echo e(route('contacts.edit', $contact)); ?>" class="btn btn-warning px-4">Edit</a>
            <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST" style="display:inline-block">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger px-4" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-secondary px-4">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mathe\Herd\html\html\resources\views/contacts/show.blade.php ENDPATH**/ ?>