
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('amber.resources.photos-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <h1> New Fotoblog entry </h1>
      <form method="POST" action="<?php echo e(URL::to('/Amber/photos')); ?>" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Titel</label>
          <input type="text" class="form-control" name="title" id="title-input" placeholder="Titel">
          <label for="name-input">Description</label>
          <input type="text" class="form-control" name="description" id="description-input" placeholder="Description">
          <label for="name-input">Image</label>
          <input type="file" name='image' id='file'>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>