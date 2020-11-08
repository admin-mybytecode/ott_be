
<?php $__env->startSection('title','Create Post'); ?>
<?php $__env->startSection('content'); ?>
  <div class="admin-form-main-block mrg-t-40">
    <h4 class="admin-form-text"><a href="<?php echo e(url('admin/blog')); ?>" data-toggle="tooltip" data-original-title="Go back" class="btn-floating"><i class="material-icons">reply</i></a> Create Post</h4>
    <div class="row">
      <div class="col-md-10">
        <div class="admin-form-block z-depth-1">
          <?php echo Form::open(['method' => 'POST', 'action' => 'BlogController@store', 'files' => true]); ?>

            <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                <?php echo Form::label('title', 'Blog Title'); ?>

                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Enter blog title eg:Arrow"></i>
                <?php echo Form::text('title', null, ['class' => 'form-control', 'autofocus', 'autocomplete'=>'off','required', 'placeholder'=> 'Please enter your blog title']); ?>

                <small class="text-danger"><?php echo e($errors->first('title')); ?></small>
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
                <?php echo Form::label('detail', 'Description*'); ?> - <p class="inline info">Please enter product description</p>
                <?php echo Form::textarea('detail', null, ['id' => '','autocomplete'=>'off', 'class' => 'form-control ckeditor', 'required']); ?>

                <small class="text-danger"><?php echo e($errors->first('detail')); ?></small>
            </div>
             <div class="form-group<?php echo e($errors->has('is_active') ? ' has-error' : ''); ?> switch-main-block">
            <div class="row">
              <div class="col-xs-4">
                <?php echo Form::label('is_active', 'Status'); ?>

              </div>
              <div class="col-xs-5 pad-0">
                <label class="switch">                
                  <?php echo Form::checkbox('is_active', 1, 1, ['class' => 'checkbox-switch']); ?>

                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <small class="text-danger"><?php echo e($errors->first('is_active')); ?></small>
            </div>
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

<?php $__env->startSection('custom-script'); ?>
	<script>
		$(document).ready(function(){
      $('.upload-image-main-block').hide();
      $('.for-custom-image input').click(function(){
        if($(this).prop("checked") == true){
          $('.upload-image-main-block').fadeIn();
        }
        else if($(this).prop("checked") == false){
          $('.upload-image-main-block').fadeOut();
        }
      });
    });
	</script>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>