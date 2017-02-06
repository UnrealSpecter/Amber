
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('amber.resources.works-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <h1> New Works entry </h1>
  <form method="POST" action="<?php echo e(URL::to('/Amber/works')); ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name-input">Title</label>
      <input type="text" class="form-control" name="title" id="title-input" placeholder="Typ a title for the image">
      <label for="name-input">Dimensions</label>
      <input type="text" class="form-control" name="dimensions" id="dimensions-input" placeholder="Typ the dimensions for the image">
      <label class="control-label" for="date">Jaartal</label>
      <input class="form-control" id="date" name="workDate" placeholder="YYYY-MM-DD" type="text"/>
      <!--TODO imagepath should be imagePath in migration en everywhere fucking else-->
      <label for="name-input">Image</label>
      <input type="file" name='imagepath' id='file'>
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </div>
    <button type="submit" class="btn btn-lg">Save</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>