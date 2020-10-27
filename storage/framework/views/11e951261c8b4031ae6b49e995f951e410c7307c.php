
<?php $__env->startSection('title','Our Blog'); ?>
<?php $__env->startSection('main-wrapper'); ?>
 <section class="main-wrapper">
    <div class="container-fluid">
    <?php if(isset($blogs) && count($blogs) > 0): ?>
      <div class="purchase-plan-main-block main-home-section-plans">
        <div class="panel-setting-main-block">
          <div class="container-fluid">
            <div class="plan-block-dtl">
              <h3 class="plan-dtl-heading">Our Blogs</h3>
            </div>
            <div class="snip1404 row">
              <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-6" style="height: 600px;">
                        <div class="col-sm-12 plan-title imageblog">
                          <?php if(isset($blog->image)): ?>
                               <a href="<?php echo e(url('account/blog/'.$blog->slug)); ?>"><img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>"  class="img-responsive" alt="image"></a>
                               <?php endif; ?>

                           <br/>

                            <div class="main-plan-section">

                              <div>
                                <?php
                                  $uname=App\User::where('id',$blog->user_id)->get();
                                  foreach($uname as $name)
                                  {
                                    $user_name = $name->name;
                                  }
                                  ?>
                                  <p class="pull-right">
                                    <span><i class="fa fa-clock-o" style="color:white;"></i></span> <?php echo e(date ('d.m.Y',strtotime($blog->created_at))); ?>&emsp;<span><i class="fa fa-user" style="color:white;"></i></span><?php echo e($user_name); ?>

                                  </p>
                                  <h5><a href="<?php echo e(url('account/blog/'.$blog->slug)); ?>" title="<?php echo e($blog->title); ?>"><?php echo e(str_limit($blog->title, 30)); ?></a> </h5><br/>
                              </div>
                              <div class="" >
                                  <p class="blog" ><?php echo str_limit($blog->detail, 60); ?></p>
                                   
                              </div>
                              
                           </div>
                        </div>
                        <div class="plan-select pull-right"><a href="<?php echo e(url('account/blog/'.$blog->slug)); ?>">Read More</a></div><br/>
                  </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
<?php endif; ?>
	</div>
	</section>
 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>