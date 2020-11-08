
<?php $__env->startSection('title','Create Post'); ?>
<?php $__env->startSection('content'); ?>
  <div class="admin-form-main-block mrg-t-40">
    <h4 class="admin-form-text"><a href="<?php echo e(url('admin/temple')); ?>" data-toggle="tooltip" data-original-title="Go back" class="btn-floating"><i class="material-icons">reply</i></a> Create Post</h4>
    <div class="row">
      <div class="col-md-10">
        <div class="admin-form-block z-depth-1">
          <?php echo Form::open(['method' => 'POST', 'action' => 'TempleController@store', 'files' => true]); ?>

            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <?php echo Form::label('title', 'Temple Name'); ?>

                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter temple name"></i>
                <?php echo Form::text('name', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter your temple title']); ?>

                <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
            </div>

            <div class="form-group<?php echo e($errors->has('bank_number') ? ' has-error' : ''); ?>" >
              <?php echo Form::label('title', 'Bank Account Number'); ?>

              <?php echo Form::text('bank_number', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter Bank Account']); ?>

                <small class="text-danger"><?php echo e($errors->first('bank_number')); ?></small>
            </div>

            <div class="form-group<?php echo e($errors->has('ifsc') ? ' has-error' : ''); ?>" >
              <?php echo Form::label('title', 'IFSC'); ?>

              <?php echo Form::text('ifsc', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter IFSC']); ?>

                <small class="text-danger"><?php echo e($errors->first('ifsc')); ?></small>
            </div>

            <div class="form-group<?php echo e($errors->has('branch') ? ' has-error' : ''); ?>" >
              <?php echo Form::label('title', 'Branch'); ?>

              <?php echo Form::text('branch', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter Branch']); ?>

                <small class="text-danger"><?php echo e($errors->first('branch')); ?></small>
            </div>

            <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>" >
              <?php echo Form::label('title', 'Address'); ?>

              <?php echo Form::text('address', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter Address']); ?>

                <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
            </div>

            
            
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?> input-file-block">
                    <?php echo Form::label('image', 'Image'); ?> - <p class="inline info">Help block text</p>
                    <?php echo Form::file('image', ['class' => 'input-file','required', 'id'=>'image']); ?>

                    <label for="image" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Blog Thumbnail">
                      <i class="icon fa fa-check"></i>
                      <span class="js-fileName">Choose a File</span>
                    </label>
                    <p class="info">Choose custom image (required)</p>
                    <small class="text-danger"><?php echo e($errors->first('image')); ?></small>
                  </div>
                </div>
               
          </div>
           
              <div class=" form-group<?php echo e($errors->has('detail') ? ' has-error' : ''); ?>">
                <?php echo Form::label('detail', 'Description*'); ?> - <p class="inline info">Please enter temple description</p>
                <?php echo Form::textarea('detail', null, ['id' => '','autocomplete'=>'off', 'class' => 'form-control ckeditor', 'required']); ?>

                <small class="text-danger"><?php echo e($errors->first('detail')); ?></small>
            </div>
             <div class="form-group<?php echo e($errors->has('is_active') ? ' has-error' : ''); ?> switch-main-block">
          </div>
            
            <div class="btn-group pull-right">
              <button type="reset" class="btn btn-info"><i class="material-icons left">toys</i> Reset</button>
              <button type="submit" class="btn btn-success"><i class="material-icons left">add_to_photos</i> Create</button>
            </div>
            <div class="clear-both"></div>
          <?php echo Form::close(); ?>

        </div>  
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>