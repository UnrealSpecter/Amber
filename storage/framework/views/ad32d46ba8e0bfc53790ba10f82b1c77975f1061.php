
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.works-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <h1> New Works entry </h1>
      <form method="POST" action="<?php echo e(URL::to('/Amber/works')); ?>/<?php echo e($work->id); ?>" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Title</label>
          <input type="text" class="form-control" name="title" id="title-input" placeholder="Typ a title for the image" value="<?php echo e($work->title); ?>"/>
          <label for="name-input">Dimensions</label>
          <input type="text" class="form-control" name="dimensions" id="dimensions-input" placeholder="Typ the dimensions for the image" value="<?php echo e($work->dimensions); ?>" />
          <label class="control-label" for="date">Jaartal</label>
          <input class="form-control" id="date" name="workDate" placeholder="YYYY-MM-DD" type="text" value="<?php echo e($work->workDate); ?>"/>
          <!--TODO imagepath should be imagePath in migration en everywhere fucking else-->
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>