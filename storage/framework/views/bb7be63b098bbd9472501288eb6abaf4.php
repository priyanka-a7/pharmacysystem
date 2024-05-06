<style>
form {
    border-radius: 5px;
    padding: 20px;
}

input[type=text],
select,
textarea {
    width: 75%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=number],
input[type=date] {
    width: 75%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

button {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

button:hover {
    background-color: #45a049;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
</style>



<?php $__env->startSection('content'); ?>
<h3>Edit Inventory Item</h3>
<form action="<?php echo e(route('inventory.update', ['inventoryId' => $inventory->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col-25">
            <label for="item_name">Item Name:</label>
        </div>
        <div class="col-75">
            <input type="text" id="item_name" name="item_name" class="form-control" value="<?php echo e($inventory->item_name); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="description">Description:</label>
        </div>
        <div class="col-75">
            <textarea id="description" name="description" class="form-control"><?php echo e($inventory->description); ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="quantity">Quantity:</label>
        </div>
        <div class="col-75">
            <input type="number" id="quantity" name="quantity" class="form-control" value="<?php echo e($inventory->quantity); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="price">Price:</label>
        </div>
        <div class="col-75">
            <input type="number" id="price" name="price" class="form-control" value="<?php echo e($inventory->price); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="expiry_date">Expiry Date:</label>
        </div>
        <div class="col-75">
            <input type="date" id="expiry_date" name="expiry_date" class="form-control"
                value="<?php echo e($inventory->expiry_date); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="manufacturer">Manufacturer:</label>
        </div>
        <div class="col-75">
            <input type="text" id="manufacturer" name="manufacturer" class="form-control"
                value="<?php echo e($inventory->manufacturer); ?>">
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">Update Item</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\pharmacymanagement\resources\views/inventory/edit.blade.php ENDPATH**/ ?>