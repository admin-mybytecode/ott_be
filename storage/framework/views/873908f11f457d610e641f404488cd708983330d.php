<?php $__env->startSection('title','All Live Tv'); ?>
<?php $__env->startSection('content'); ?>
<!-- <?php echo e(dump($data)); ?> -->
  <div class="content-main-block mrg-t-40">
    <div class="admin-create-btn-block">
      <a href="<?php echo e(route('temple.create')); ?>" class="btn btn-danger btn-md"><i class="material-icons left">add</i> Add Temple</a>
    </div>
    <div class="content-block box-body">
      <table id="moviesTable" class="table table-hover">
        <thead>
          <tr class="table-heading-row">
            <th>
              #
            </th>
            <th>Name</th>
            <th>Adress</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->address); ?></td>
                <td><?php echo $item->description; ?></td>
                <td><img src="<?php echo e(url('/temples/' . $item->file)); ?>" height="150px" width="150px"/></td>
                <td><button class="btn btn-primary">Edit</button></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>