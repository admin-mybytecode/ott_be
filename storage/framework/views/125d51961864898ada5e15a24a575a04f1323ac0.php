
<?php $__env->startSection('title',"Edit Movie - $movie->title"); ?>
<style type="text/css">
    body{
            background-color: #efefef;
        }
        .container-4 input#hyv-search {
            width: 500px;
            height: 30px;
            border: 1px solid #c6c6c6;
            font-size: 10pt;
            float: left;
            padding-left: 15px;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-top-left-radius: 5px;
            -moz-border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
         .container-4 input#vimeo-search {
            width: 500px;
            height: 30px;
            border: 1px solid #c6c6c6;
            font-size: 10pt;
            float: left;
            padding-left: 15px;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-top-left-radius: 5px;
            -moz-border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .container-4 button.icon {
            height: 30px;
            background: #f0f0f0 url('images/searchicon.png') 10px 1px no-repeat;
            background-size: 24px;
            -webkit-border-top-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -moz-border-radius-topright: 5px;
            -moz-border-radius-bottomright: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border: 1px solid #c6c6c6;
            width: 50px;
            margin-left: -44px;
            color: #4f5b66;
            font-size: 10pt;
        }
    
</style>
<?php $__env->startSection('content'); ?>
<div class="admin-form-main-block">
  <h4 class="admin-form-text"><a href="<?php echo e(url('admin/livetv')); ?>" data-toggle="tooltip" data-original-title="Go back" class="btn-floating"><i class="material-icons">reply</i></a> Edit Movie</h4>
  <div class="row">
    <div class="col-md-6">
     <div class="admin-form-block z-depth-1">
      
      <!--vimeo API Modal -->
<div id="myvimeoModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!--vimeo API Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Search From Vimeo API</h5>
      </div>
      <div class="modal-body">
        <?php if(is_null(env('VIMEO_ACCESS'))): ?>
        <p>Make Sure You Have Added Vimeo API Key in <a href="<?php echo e(url('admin/api-settings')); ?>">API Settings</a></p>
        <?php endif; ?>
       
          <div id="vimeo-page-container" style="clear:both;">
                <div class="vimeo-content-alignment">
                    <div id="vimeo-page-content" class="" style="overflow:hidden;">
                        <div class="container-4">
                            <form action="" method="post" name="vimeo-yt-search" id="vimeo-yt-search">
                                <input type="search" name="vimeo-search" id="vimeo-search" placeholder="Search..." class="ui-autocomplete-input" autocomplete="off">
                                <button class="icon" id="vimeo-searchBtn"></button>
                            </form>
                        </div>
                        <div>
                            <input type="hidden" id="vpageToken" value="">
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" id="vpageTokenPrev" value="" class="btn btn-default">Prev</button>
                              <button type="button" id="vpageTokenNext" value="" class="btn btn-default">Next</button>
                            </div>
                        </div>
                        <div id="vimeo-watch-content" class="vimeo-watch-main-col vimeo-card vimeo-card-has-padding">
                            <ul id="vimeo-watch-related" class="vimeo-video-list">
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--youtube API Modal -->
<div id="myyoutubeModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!--youtube API Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Search From Youtube API</h5>
      </div>
      <div class="modal-body">
        <?php if(is_null(env('YOUTUBE_API_KEY'))): ?>
        <p>Make Sure You Have Added Youtube API Key in <a href="<?php echo e(url('admin/api-settings')); ?>">API Settings</a></p>
        <?php endif; ?>
       
          <div id="hyv-page-container" style="clear:both;">
                <div class="hyv-content-alignment">
                    <div id="hyv-page-content" class="" style="overflow:hidden;">
                        <div class="container-4">
                            <form action="" method="post" name="hyv-yt-search" id="hyv-yt-search">
                                <input type="search" name="hyv-search" id="hyv-search" placeholder="Search..." class="ui-autocomplete-input" autocomplete="off">
                                <button class="icon" id="hyv-searchBtn"></button>
                            </form>
                        </div>
                        <div>
                            <input type="hidden" id="pageToken" value="">
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" id="pageTokenPrev" value="" class="btn btn-default">Prev</button>
                              <button type="button" id="pageTokenNext" value="" class="btn btn-default">Next</button>
                            </div>
                        </div>
                        <div id="hyv-watch-content" class="hyv-watch-main-col hyv-card hyv-card-has-padding">
                            <ul id="hyv-watch-related" class="hyv-video-list">
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       <?php echo Form::model($movie, ['method' => 'PATCH', 'action' => ['LiveTvController@update',$movie->id], 'files' => true]); ?>


   

       <div id="movie_title" class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
        <?php echo Form::label('title', 'Movie Title'); ?>

        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter movie title"></i>
        <input <?php echo e($movie->fetch_by == 'byID' ? "readonly=readonly" : ""); ?> id="mv_t" type="text" class="form-control" name="title" value="<?php echo e($movie->title); ?>">
        <small class="text-danger"><?php echo e($errors->first('title')); ?></small>
      </div>



      <div class="form-group">
        <label for="">Meta Keyword: </label>
        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter meta keyword"></i>
        <input name="keyword" type="text" class="form-control" value="<?php echo e($movie->keyword); ?>" data-role="tagsinput"/>


      </div>

      <div class="form-group">
        <label for="">Meta Description: </label>
        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter meta description"></i>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo e($movie->description); ?></textarea>
      </div>

      
      <div class="form-group<?php echo e($errors->has('selecturl') ? ' has-error' : ''); ?>">
        <?php echo Form::label('selecturls', 'Add Video'); ?>

        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please select one of the options to add Video/Movie"></i>
        <select class="form-control select2" id="selecturl" name="selecturl">
         
          <?php if($video_link['iframeurl']!=''): ?>
          <option value="iframeurl" selected="">IFrame URL</option>
          <?php else: ?>
            <option value="iframeurl">IFrame URL</option>
          <?php endif; ?>
          
         
           <?php if($video_link['ready_url']!=''): ?>
           <option value="customurl" selected="">Custom URL/ Youtube URL/ Vimeo URL</option>
            <?php else: ?>
             <option value="customurl">Custom URL/ Youtube URL/ Vimeo URL</option>
          <?php endif; ?>
         
           
        </select>
       
        <small class="text-danger"><?php echo e($errors->first('selecturl')); ?></small>
      </div>      
      <div id="ifbox"  style="<?php echo e($video_link['iframeurl']!='' ? '' : "display: none"); ?>" class="form-group">
        <label for="iframeurl">IFRAME URL: </label> <a data-toggle="modal" data-target="#embdedexamp"><i class="fa fa-question-circle-o"> </i></a>
        <input  type="text" value="<?php echo e($video_link['iframeurl']); ?>" class="form-control" name="iframeurl" placeholder="Iframe URL">
      </div>

      <!-- Modal -->
      <div  class="modal fade" id="embdedexamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h6 class="modal-title" id="myModalLabel">Embded URL Examples: </h6>
            </div>
            <div class="modal-body">
              <p style="font-size: 15px;"><b>Youtube:</b> https://www.youtube.com/embed/videoID </p>

              <p style="font-size: 15px;"><b>Google Drive:</b> https://drive.google.com/file/d/videoID/preview </p>

              <p style="font-size: 15px;"><b>Openload:</b> https://openload.co/embed/videoID </p>
            </div>

          </div>
        </div>
      </div>

      
      <div id="ready_url" style="<?php echo e($video_link['ready_url']!='' ? '' : "display: none"); ?>" class="form-group<?php echo e($errors->has('ready_url') ? ' has-error' : ''); ?>">
       <label id="ready_url_text"></label>
       <p class="inline info"> Please enter your video url</p>
       <?php echo Form::text('ready_url',$video_link['ready_url'], ['class' => 'form-control','id'=>'apiUrl']); ?>

       <small class="text-danger"><?php echo e($errors->first('ready_url')); ?></small>
     </div>
    

     
     
   

   <div class="form-group<?php echo e($errors->has('a_language') ? ' has-error' : ''); ?>">
    <?php echo Form::label('a_language', 'Audio Languages'); ?>

    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please select audio language"></i>
    <div class="input-group">
      <select name="a_language[]" id="a_language" class="form-control select2" multiple="multiple">
        <?php if(isset($old_lans) && count($old_lans) > 0): ?>
        <?php $__currentLoopData = $old_lans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $old): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($old->id); ?>" selected="selected"><?php echo e($old->language); ?></option> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(isset($a_lans)): ?>
        <?php $__currentLoopData = $a_lans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($rest->id); ?>"><?php echo e($rest->language); ?></option> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </select>  
      <a href="#" data-toggle="modal" data-target="#AddLangModal" class="input-group-addon"><i class="material-icons left">add</i></a>
    </div>
    <small class="text-danger"><?php echo e($errors->first('a_language')); ?></small>
  </div>
  <div class="form-group<?php echo e($errors->has('maturity_rating') ? ' has-error' : ''); ?>">
    <?php echo Form::label('maturity_rating', 'Maturity Rating'); ?>

    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please select maturity rating"></i>
    <?php echo Form::select('maturity_rating', array('all age' => 'All age', '13+' =>'13+', '16+' => '16+', '18+'=>'18+'), null, ['class' => 'form-control select2']); ?>

    <small class="text-danger"><?php echo e($errors->first('maturity_rating')); ?></small>
  </div>
  <div class="form-group" style="display: none">
    <div class="row">
      <div class="col-xs-6">
        <?php echo Form::label('', 'Choose custom thumbnail & poster'); ?>

      </div>
      <div class="col-xs-5 pad-0">
        <label class="switch for-custom-image">
          <?php echo Form::checkbox('', 1, 1, ['class' => 'checkbox-switch']); ?>

          <span class="slider round"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="upload-image-main-block">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group<?php echo e($errors->has('thumbnail') ? ' has-error' : ''); ?> input-file-block">
          <?php echo Form::label('thumbnail', 'Thumbnail'); ?> - <p class="info">Help block text</p>
          <?php echo Form::file('thumbnail', ['class' => 'input-file', 'id'=>'thumbnail']); ?>

          <label for="thumbnail" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Thumbnail">
            <i class="icon fa fa-check"></i>
            <span class="js-fileName">Choose a File</span>
          </label>
          <p class="info">Choose custom thumbnail</p>
          <small class="text-danger"><?php echo e($errors->first('thumbnail')); ?></small>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group<?php echo e($errors->has('poster') ? ' has-error' : ''); ?> input-file-block">
          <?php echo Form::label('poster', 'Poster'); ?> - <p class="info">Help block text</p>
          <?php echo Form::file('poster', ['class' => 'input-file', 'id'=>'poster']); ?>

          <label for="poster" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Poster">
            <i class="icon fa fa-check"></i>
            <span class="js-fileName">Choose a File</span>
          </label>
          <p class="info">Choose custom poster</p>
          <small class="text-danger"><?php echo e($errors->first('poster')); ?></small>
        </div>
      </div>
    </div>
  </div>
  <div class="pad_plus_border" style=" <?php echo e($video_link['upload_video']!='' || $video_link['ready_url']!='' ? "" : "display: none"); ?>)" id="subtitle_section">
    <div class="form-group<?php echo e($errors->has('subtitle') ? ' has-error' : ''); ?>">
      <div class="row">
        <div class="col-xs-6">
          <?php echo Form::label('subtitle', 'Subtitle'); ?>

        </div>
        <div class="col-xs-5 pad-0">
          <label class="switch">
            <?php echo Form::checkbox('subtitle', 1, $movie->subtitle, ['class' => 'checkbox-switch']); ?>

            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="col-xs-12">
        <small class="text-danger"><?php echo e($errors->first('subtitle')); ?></small>
      </div>
    </div>
    <div class="form-group<?php echo e($errors->has('subtitle_list') ? ' has-error' : ''); ?> subtitle_list">
      <?php echo Form::label('subtitle_list', 'Subtitles List'); ?>

      <div class="input-group">
        <select name="subtitle_list[]" id="subtitle_list" class="form-control select2" multiple="multiple">
          <?php if(isset($old_subtitles) && count($old_subtitles) > 0): ?>
          <?php $__currentLoopData = $old_subtitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $old): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($old->id); ?>" selected="selected"><?php echo e($old->language); ?></option> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          <?php if(isset($a_subs)): ?>
          <?php $__currentLoopData = $a_subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($rest->id); ?>"><?php echo e($rest->language); ?></option> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </select>  
        <a href="#" data-toggle="modal" data-target="#AddLangModal" class="input-group-addon"><i class="material-icons left">add</i></a>
      </div>
      <small class="text-danger"><?php echo e($errors->first('subtitle_list')); ?></small>
    </div>
             <label>Subtitle:</label>
     <table class="table table-bordered" id="dynamic_field">  
      <tr> 
        <td>
         <div class="form-group<?php echo e($errors->has('sub_t') ? ' has-error' : ''); ?> input-file-block">
          <input type="file" name="sub_t[]"/>
          <p class="info">Choose subtitle file ex. subtitle.srt, or. txt</p>
          <small class="text-danger"><?php echo e($errors->first('sub_t')); ?></small>
        </div>
      </td>

      <td>
        <input type="text" name="sub_lang[]" placeholder="Subtitle Language" class="form-control name_list" />
      </td>  
      <td><button type="button" name="add" id="add" class="btn btn-xs btn-success">
        <i class="fa fa-plus"></i>
      </button></td>  
    </tr>  
  </table>
            </div>
           
            <div class="form-group<?php echo e($errors->has('featured') ? ' has-error' : ''); ?>">
              <div class="row">
                <div class="col-xs-6">
                  <?php echo Form::label('featured', 'Featured'); ?>

                </div>
                <div class="col-xs-5 pad-0">
                  <label class="switch">                
                    <?php echo Form::checkbox('featured', 1, $movie->featured, ['class' => 'checkbox-switch']); ?>

                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="col-xs-12">
                <small class="text-danger"><?php echo e($errors->first('featured')); ?></small>
              </div>
            </div>
            <div class="menu-block">
              <h6 class="menu-block-heading">Please Select Menu</h6>
              <?php if(isset($menus) && count($menus) > 0): ?>
              <ul>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <div class="inline">
                    <?php
                    $checked = null;
                    if (isset($menu->menu_data) && count($menu->menu_data) > 0) {
                      if ($menu->menu_data->where('movie_id', $movie->id)->where('menu_id', $menu->id)->first() != null) {
                        $checked = 1;
                      }
                    }
                    ?>
                    <?php if($checked == 1): ?>
                    <input type="checkbox" class="filled-in material-checkbox-input" name="menu[]" value="<?php echo e($menu->id); ?>" id="checkbox<?php echo e($menu->id); ?>" checked>
                    <label for="checkbox<?php echo e($menu->id); ?>" class="material-checkbox"></label>
                    <?php else: ?>
                    <input type="checkbox" class="filled-in material-checkbox-input" name="menu[]" value="<?php echo e($menu->id); ?>" id="checkbox<?php echo e($menu->id); ?>">
                    <label for="checkbox<?php echo e($menu->id); ?>" class="material-checkbox"></label>
                    <?php endif; ?>
                  </div>
                  <?php echo e($menu->name); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              <?php endif; ?>
            </div>
            
          
  <input type="text" name="director_id" value="0" hidden="true">
  <input type="text" name="actor_id" value="0" hidden="true">
  <input type="text" name="duration" value="0" hidden="true">
          <div class="form-group<?php echo e($errors->has('rating') ? ' has-error' : ''); ?>">
    <?php echo Form::label('rating', 'Ratings'); ?>

    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter ratings eg:8"></i>
    <?php echo Form::text('rating',  null, ['class' => 'form-control', ]); ?>

    <small class="text-danger"><?php echo e($errors->first('rating')); ?></small>
  </div>
          
          <div class="form-group<?php echo e($errors->has('genre_id') ? ' has-error' : ''); ?>">
           <?php echo Form::label('genre_id', 'Genre'); ?>

           <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please select your genres"></i>
           <div class="input-group">
            <select name="genre_id[]" id="genre_id" class="form-control select2" multiple="multiple">
              <?php if(isset($old_genre) && count($old_genre) > 0): ?>
              <?php $__currentLoopData = $old_genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $old): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($old->id); ?>" selected="selected"><?php echo e($old->name); ?></option> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              <?php if(isset($genre_ls)): ?>
              <?php $__currentLoopData = $genre_ls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($rest->id); ?>"><?php echo e($rest->name); ?></option> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </select>  
            <a href="#" data-toggle="modal" data-target="#AddGenreModal" class="input-group-addon"><i class="material-icons left">add</i></a>
          </div>
          <small class="text-danger"><?php echo e($errors->first('genre_id')); ?></small>
        </div>
      
     
      
       
       <div class="form-group<?php echo e($errors->has('detail') ? ' has-error' : ''); ?>">
         <?php echo Form::label('detail', 'Description'); ?>

         <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter movie description"></i>
         <?php echo Form::textarea('detail', null, ['class' => 'form-control materialize-textarea', 'rows' => '5']); ?>

         <small class="text-danger"><?php echo e($errors->first('detail')); ?></small>
       </div>
    
     <div class="btn-group pull-right">
      <button type="submit" class="btn btn-success"><i class="material-icons left">add_to_photos</i> Update</button>
    </div>
    <div class="clear-both"></div>
    <?php echo Form::close(); ?>

  </div>  
</div>

<div class="col-md-6">
  <div class="admin-form-block z-depth-1">
   
    <h5>Subtitles</h5>

    <hr>

    <table class="table table-borderd">
      <thead>
        <tr>
          <th>#</th>
          <th>Subtitle Language</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php $__currentLoopData = $movie->subtitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $subtitle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($key+1); ?></td>
          <td><?php echo e($subtitle->sub_lang); ?></td>
          <td>
           <button type="button" class="btn-danger btn-floating" data-toggle="modal" data-target="#<?php echo e($subtitle->id); ?>deleteModal"><i class="material-icons">delete</i> </button></td>
         </tr>

         <div id="<?php echo e($subtitle->id); ?>deleteModal" class="delete-modal modal fade" role="dialog">
          <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="delete-icon"></div>
              </div>
              <div class="modal-body text-center">
                <h4 class="modal-heading">Are You Sure ?</h4>
                <p>Do you really want to delete these subtitle? This process cannot be undone.</p>
              </div>
              <div class="modal-footer">
                <?php echo Form::open(['method' => 'POST', 'action' => ['SubtitleController@delete', $subtitle->id]]); ?>

                <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
                <?php echo Form::close(); ?>

              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

<!-- Add Subtitle Modal -->
<div id="submodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Add Subtitle</h5>
      </div>
      <form action="<?php echo e(route('add.subtitle',$movie->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="modal-body">
         <table class="table table-bordered" id="dynamic_field">  
          <tr> 
            <td>
             <div class="form-group<?php echo e($errors->has('sub_t') ? ' has-error' : ''); ?> input-file-block">
              <input type="file" name="sub_t[]"/>
              <p class="info">Choose subtitle file ex. subtitle.srt, or. txt</p>
              <small class="text-danger"><?php echo e($errors->first('sub_t')); ?></small>
            </div>
          </td>

          <td>
            <input type="text" name="sub_lang[]" placeholder="Subtitle Language" class="form-control name_list" />
          </td>  
          <td><button type="button" name="add" id="add" class="btn btn-xs btn-success">
            <i class="fa fa-plus"></i>
          </button></td>  
        </tr>  
      </table>
    </div>
    <div class="modal-footer">
      <div class="btn-group pull-right">
        <button type="reset" class="btn btn-info">Reset</button>
        <button type="submit" class="btn btn-success">Create</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>

<!-- Add Language Modal -->
<div id="AddLangModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Add Language</h5>
      </div>
      <?php echo Form::open(['method' => 'POST', 'action' => 'AudioLanguageController@store']); ?>

      <div class="modal-body">
        <div class="form-group<?php echo e($errors->has('language') ? ' has-error' : ''); ?>">
          <?php echo Form::label('language', 'Language'); ?>

          <?php echo Form::text('language', null, ['class' => 'form-control', 'required' => 'required']); ?>

          <small class="text-danger"><?php echo e($errors->first('language')); ?></small>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right">
          <button type="reset" class="btn btn-info">Reset</button>
          <button type="submit" class="btn btn-success">Create</button>
        </div>
      </div>
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<!-- Add Director Modal -->
<div id="AddDirectorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Add Director</h5>
      </div>
      <?php echo Form::open(['method' => 'POST', 'action' => 'DirectorController@store', 'files' => true]); ?>

      <div class="modal-body admin-form-block">          
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <?php echo Form::label('name', 'Name'); ?>

          <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

          <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
        </div>
        <div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?> input-file-block">
          <?php echo Form::label('image', 'Director Image'); ?> - <p class="inline info">Help block text</p>
          <?php echo Form::file('image', ['class' => 'input-file', 'id'=>'image']); ?>

          <label for="image" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Director pic">
            <i class="icon fa fa-check"></i>
            <span class="js-fileName">Choose a File</span>
          </label>
          <p class="info">Choose custom image</p>
          <small class="text-danger"><?php echo e($errors->first('image')); ?></small>
        </div>
      </div>  
      <div class="modal-footer">            
        <div class="btn-group pull-right">
          <button type="reset" class="btn btn-info"><i class="material-icons left">toys</i> Reset</button>
          <button type="submit" class="btn btn-success"><i class="material-icons left">add_to_photos</i> Create</button>
        </div>
        <div class="clear-both"></div>
      </div>  
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<!-- Add Actor Modal -->
<div id="AddActorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Add Actor</h5>
      </div>
      <?php echo Form::open(['method' => 'POST', 'action' => 'ActorController@store', 'files' => true]); ?>

      <div class="modal-body admin-form-block">
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <?php echo Form::label('name', 'Name'); ?>

          <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

          <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
        </div>
        <div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?> input-file-block">
          <?php echo Form::label('image', 'Director Image'); ?> - <p class="inline info">Help block text</p>
          <?php echo Form::file('image', ['class' => 'input-file', 'id'=>'image']); ?>

          <label for="image" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Director pic">
            <i class="icon fa fa-check"></i>
            <span class="js-fileName">Choose a File</span>
          </label>
          <p class="info">Choose custom image</p>
          <small class="text-danger"><?php echo e($errors->first('image')); ?></small>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right">
          <button type="reset" class="btn btn-info"><i class="material-icons left">toys</i> Reset</button>
          <button type="submit" class="btn btn-success"><i class="material-icons left">add_to_photos</i> Create</button>
        </div>
      </div>  
      <div class="clear-both"></div>
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<!-- Add Genre Modal -->
<div id="AddGenreModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Add Genre</h5>
      </div>
      <?php echo Form::open(['method' => 'POST', 'action' => 'GenreController@store']); ?>

      <div class="modal-body admin-form-block">
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <?php echo Form::label('name', 'Name'); ?>

          <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

          <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right">
          <button type="reset" class="btn btn-info"><i class="material-icons left">toys</i> Reset</button>
          <button type="submit" class="btn btn-success"><i class="material-icons left">add_to_photos</i> Create</button>
        </div>
      </div>
      <div class="clear-both"></div>
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-script'); ?>
<script>
  $(document).ready(function(){
   
    $('#selecturl').change(function(){  
     selecturl = document.getElementById("selecturl").value;
     if (selecturl == 'iframeurl') {
    $('#ifbox').show();
       $('#subtitle_section').hide();
    $('#ready_url').hide();


  }else if (selecturl == 'uploadvideo') {
   $('#uploadvideo').show();
      $('#subtitle_section').show();
   $('#ready_url').hide();
   $('#ifbox').hide();

 }else if(selecturl=='customurl'){
       $('#ifbox').hide();
       // $('#uploadvideo').hide();
       $('#ready_url').show();
          $('#subtitle_section').hide();
       $('#ready_url_text').text('Enter Custom URL or Vimeo or Youtube URL');
   }
    else if (selecturl == 'youtubeapi') {
   // $('#uploadvideo').hide();
   $('#ready_url').show();
      $('#subtitle_section').hide();
  
   $('#ifbox').hide();
   $('#ready_url_text').text('Import From Youtube API');

 }else if(selecturl=='vimeoapi'){
   $('#ifbox').hide();
   // $('#uploadvideo').hide();
   $('#ready_url').show();
      $('#subtitle_section').hide();
  
   $('#ready_url_text').text('Import From Vimeo API');
 }


});
    var i= 1;
    $('#add').click(function(){  
     i++;  
     $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="sub_t[]"/></td><td><input type="text" name="sub_lang[]" placeholder="Subtitle Language" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">X</button></td></tr>');  
   });

    $(document).on('click', '.btn_remove', function(){  
     var button_id = $(this).attr("id");   
     $('#row'+button_id+'').remove();  
   });  

   
    <?php if($movie->tmdb == 'N'): ?>
    $('#custom_dtl').show();
    <?php endif; ?>
    <?php if($movie->subtitle == 0): ?>
    $('.subtitle_list').hide();
    $('#subtitle-file').hide();
    <?php endif; ?> 
    <?php if($movie->series == 0): ?>
    $('.movie_id').hide();
    <?php endif; ?>
    $('input[name="subtitle"]').click(function(){
     if($(this).prop("checked") == true){
       $('.subtitle_list').fadeIn();
       $('#subtitle-file').fadeIn();
     }
     else if($(this).prop("checked") == false){
      $('.subtitle_list').fadeOut();
      $('#subtitle-file').fadeOut();
    }
  });
   
  });
</script>


<script>
        $(document).ready(function() {
           var videourl;
            vimeoApiCall();
            $("#vpageTokenNext").on( "click", function( event ) {
                $("#vpageToken").val($("#vpageTokenNext").val());
                vimeoApiCall();
            });
            $("#vpageTokenPrev").on( "click", function( event ) {
                $("#vpageToken").val($("#vpageTokenPrev").val());
                vimeoApiCall();
            });
            $("#vimeo-searchBtn").on( "click", function( event ) {
                vimeoApiCall();
                return false;
            });
            jQuery( "#vimeo-search" ).autocomplete({
              source: function( request, response ) {
                //console.log(request.term);
                var sqValue = [];
                var accesstoken='<?php echo e(env('VIMEO_ACCESS')); ?>';
                var myvimeourl='https://api.vimeo.com/videos?query=videos'+'&access_token=' + accesstoken +'&per_page=1';
                console.log(myvimeourl);
                jQuery.ajax({
                    type: "GET",
                    url: myvimeourl,
                    dataType: 'jsonp',
                    
                    success: function(data){
                        console.log(data[1]);
                        obj = data[1];
                        jQuery.each( obj, function( key, value ) {
                            sqValue.push(value[0]);
                        });
                        response( sqValue);
                    }
                });
              },
              select: function( event, ui ) {
                setTimeout( function () { 
                    vimeoApiCall();
                }, 300);
              }
            });  
        });
function vimeoApiCall(){
  console.log('yeah i am here');
    var accesstoken='<?php echo e(env('VIMEO_ACCESS')); ?>';
    var text=$("#vimeo-search").val();
   var next=  $("#vpageTokenNext").val();
   console.log('jxhh'+next);
   var prev= $("#vpageTokenPrev").val();
    var myvimeourl=null;
   if (next != null && next !='') {
     myvimeourl='https://api.vimeo.com'+next;
   }else if (prev != null && prev !='') {
       myvimeourl='https://api.vimeo.com'+prev;
   }else{
       myvimeourl='https://api.vimeo.com/videos?query='+ text + '&access_token=' + accesstoken+'&per_page=5';
   }
  
   console.log('url'+myvimeourl);
    $.ajax({
        cache: false,
     
        dataType: 'json',
        type: 'GET',
       
        url: myvimeourl,

    })
    .done(function(data) {
      console.log(data);
    // alert('duhjf');
        if ( data.paging.previous === null) {$("#vpageTokenPrev").hide();}else{$("#vpageTokenPrev").show();}
        if ( data.paging.next === null) {$("#vpageTokenNext").hide();}else{$("#vpageTokenNext").show();}
        var items = data.data, videoList = "";
     
        $("#vpageTokenNext").val(data.paging.next);
        $("#vpageTokenPrev").val(data.paging.previous);
        console.log(items);
        $.each(items, function(index,e) {
             
             videourl=e.link;
               // console.log(videourl);
            videoList = videoList 
            + '<li class="hyv-video-list-item" ><div class="hyv-thumb-wrapper"><p class="hyv-thumb-link"><span class="hyv-simple-thumb-wrap"><img alt="'+e.name+'" src="'+e.pictures.sizes[3].link+'" height="90"></span></p></div><div class="hyv-content-wrapper"><p  class="hyv-content-link">'+e.name+'<span class="title">'+e.description.substr(0, 105)+'</span><span class="stat attribution">by <span>'+e.user.name+'</span></span></p><button class="bn btn-info btn-sm inline" onclick=setVideovimeoURl("'+videourl+'")>Add</button></div></li>';
              
          
        });

        $("#vimeo-watch-related").html(videoList);
       
    });

}
</script>
<script>
  $('#movi_id').on('change',function(){
    if ($('#movi_id').is(':checked')){

      $('#txt2').text("Movie Created By Title:");
      $('#mv_t').removeAttr('readonly','readonly');
      $('#mv_i').attr('readonly','readonly');

    }else{
     $('#mv_i').removeAttr('readonly','readonly');
     $('#mv_t').attr('readonly','readonly');
     $('#txt2').text("Movie Created By ID:");
   }
 });

 
</script>


<script>
        $(document).ready(function() {
           var videourl;
            youtubeApiCall();
            $("#pageTokenNext").on( "click", function( event ) {
                $("#pageToken").val($("#pageTokenNext").val());
                youtubeApiCall();
            });
            $("#pageTokenPrev").on( "click", function( event ) {
                $("#pageToken").val($("#pageTokenPrev").val());
                youtubeApiCall();
            });
            $("#hyv-searchBtn").on( "click", function( event ) {
                youtubeApiCall();
                return false;
            });
            jQuery( "#hyv-search" ).autocomplete({
              source: function( request, response ) {
                //console.log(request.term);
                var sqValue = [];
                jQuery.ajax({
                    type: "POST",
                    url: "http://suggestqueries.google.com/complete/search?hl=en&ds=yt&client=youtube&hjson=t&cp=1",
                    dataType: 'jsonp',
                    data: jQuery.extend({
                        q: request.term
                    }, {  }),
                    success: function(data){
                        console.log(data[1]);
                        obj = data[1];
                        jQuery.each( obj, function( key, value ) {
                            sqValue.push(value[0]);
                        });
                        response( sqValue);
                    }
                });
              },
              select: function( event, ui ) {
                setTimeout( function () { 
                    youtubeApiCall();
                }, 300);
              }
            });  
        });
function youtubeApiCall(){
    $.ajax({
        cache: false,
        data: $.extend({
            key: '<?php echo e(env('YOUTUBE_API_KEY')); ?>',
            q: $('#hyv-search').val(),
            part: 'snippet'
        }, {maxResults:15,pageToken:$("#pageToken").val()}),
        dataType: 'json',
        type: 'GET',
        timeout: 5000,
        url: 'https://www.googleapis.com/youtube/v3/search'
    })
    .done(function(data) {
        if (typeof data.prevPageToken === "undefined") {$("#pageTokenPrev").hide();}else{$("#pageTokenPrev").show();}
        if (typeof data.nextPageToken === "undefined") {$("#pageTokenNext").hide();}else{$("#pageTokenNext").show();}
        var items = data.items, videoList = "";
        $("#pageTokenNext").val(data.nextPageToken);
        $("#pageTokenPrev").val(data.prevPageToken);
        // console.log(items);
        $.each(items, function(index,e) {
             
             videourl="https://www.youtube.com/watch?v="+e.id.videoId;
               console.log(videourl);
            videoList = videoList 
            + '<li class="hyv-video-list-item" ><div class="hyv-content-wrapper"><p  class="hyv-content-link" title="'+e.snippet.title+'"><span class="title">'+e.snippet.title+'</span><span class="stat attribution">by <span>'+e.snippet.channelTitle+'</span></span></p><button class="bn btn-info btn-sm inline" onclick=setVideoURl("'+videourl+'")>Add</button></div><div class="hyv-thumb-wrapper"><p class="hyv-thumb-link"><span class="hyv-simple-thumb-wrap"><img alt="'+e.snippet.title+'" src="'+e.snippet.thumbnails.default.url+'" height="90"></span></p></div></li>';
              
          
        });

        $("#hyv-watch-related").html(videoList);
       
    });
}
    </script>
<script type="text/javascript">
  function setVideoURl(videourls){
    console.log(videourls);
  $('#apiUrl').val(videourls); 
    $('#myyoutubeModal').modal("hide");
  }
</script>
<script type="text/javascript">
  function setVideovimeoURl(videourls){
    console.log(videourls);
  $('#apiUrl').val(videourls); 
    $('#myvimeoModal').modal("hide");
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){ 
    $('#selecturl').change(function() {
     $('#apiUrl').val('');  
        var opval = $(this).val(); //Get value from select element
        if(opval=="youtubeapi"){ //Compare it and if true
            $('#myyoutubeModal').modal("show"); //Open Modal
        }
        if(opval=="vimeoapi"){ //Compare it and if true
            $('#myvimeoModal').modal("show"); //Open Modal
        }
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>