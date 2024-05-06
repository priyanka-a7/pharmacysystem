

<?php $__env->startSection('content'); ?>
<h3>Inventory List</h3>
<a href="<?php echo e(route('inventory.create')); ?>">Add New Item</a>
<table style="width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expiry Date</th>
            <th>Manufacturer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $inventory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->item_name); ?></td>
            <td><?php echo e($item->description); ?></td>
            <td><?php echo e($item->quantity); ?></td>
            <td><?php echo e($item->price); ?></td>
            <td><?php echo e($item->expiry_date); ?></td>
            <td><?php echo e($item->manufacturer); ?></td>
            <td>
                <a href="<?php echo e(route('inventory.edit',$item->id)); ?>">Edit</a>
                <form action="<?php echo e(route('inventory.destroy', ['inventoryId' => $item->id])); ?>" method="POST">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\pharmacymanagement\resources\views/inventory/index.blade.php ENDPATH**/ ?>