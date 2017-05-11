
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.agenda-fragments-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1> New Agenda Fragment Entry </h1>
  <form method="POST" action="<?php echo e(URL::to('/Amber/agendafragments')); ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name-input">Image</label>
      <input type="file" name='imagepath' id='file'>
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </div>
    <button type="submit" class="btn btn-lg">Save</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>