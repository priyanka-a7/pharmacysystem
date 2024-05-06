

<?php $__env->startSection('content'); ?>
<h1>Customers</h1>
<a href="<?php echo e(route('customer.create')); ?>">Add New Customer</a>
<table style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Medical History</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer->name); ?></td>
            <td><?php echo e($customer->email); ?></td>
            <td><?php echo e($customer->address); ?></td>
            <td><?php echo e($customer->phone_number); ?></td>
            <td><?php echo e($customer->medical_history); ?></td>
            <td>
                <a href="<?php echo e(route('customer.edit', $customer->id)); ?>">Edit</a>
                <form action="<?php echo e(route('customer.destroy', $customer->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pripr\OneDrive\Desktop\pharmacy management\pharmacymanagement\resources\views/customer/index.blade.php ENDPATH**/ ?>