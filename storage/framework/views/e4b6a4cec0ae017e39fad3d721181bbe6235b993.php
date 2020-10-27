
<?php $__env->startSection('title','Create Post'); ?>
<?php $__env->startSection('content'); ?>
  <div class="admin-form-main-block mrg-t-40">
    <h4 class="admin-form-text"><a href="<?php echo e(url('admin/blog')); ?>" data-toggle="tooltip" data-original-title="Go back" class="btn-floating"><i class="material-icons">reply</i></a> Create Temple</h4>
    <div class="row">
      <div class="col-md-10">
        <div class="admin-form-block z-depth-1">
          <form action="{base_url('admin/temple/store')}" method="post">
          <div class="form-group">
            <label for="name">Temple Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>

          <div class="form-group">
            <label for="name">Descritption</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>

          <div class="form-group">
            <label for="name">Photo</label>
            <input type="file" class="form-control" id="file" name="file">
          </div>

          <div class="form-group">
            <label for="name">Bank Account number</label>
            <input type="text" class="form-control" id="bank_account_number" name="bank_account_number">
          </div>

          <div class="form-group">
            <label for="name">IFSC</label>
            <input type="text" class="form-control" id="ifsc" name="ifsc">
          </div>
          
          <div class="form-group">
            <label for="name">Branch</label>
            <input type="text" class="form-control" id="branch" name="branch">
          </div>

          <div class="form-group">
            <label for="name">Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
      
           <div class="form-group">
            <input type="submit" class="form-control" value="submit" id="name" name="name">
          </div>
          </form>
        </div>  
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>