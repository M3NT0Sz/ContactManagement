

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="mb-0 fw-bold text-primary">Contacts</h1>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary px-4">Add Contact</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary px-4">Login to Add Contact</a>
            <?php endif; ?>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($contact->id); ?></td>
                            <td><a href="<?php echo e(route('contacts.show', $contact)); ?>" class="text-decoration-none text-dark fw-semibold"><?php echo e($contact->name); ?></a></td>
                            <td><?php echo e($contact->contact); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td>
                                <a href="<?php echo e(route('contacts.edit', $contact)); ?>" class="btn btn-sm btn-warning me-1">Edit</a>
                                <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST" style="display:inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted">No contacts found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo e($contacts->links('pagination::bootstrap-5')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mathe\Herd\html\html\resources\views/contacts/index.blade.php ENDPATH**/ ?>