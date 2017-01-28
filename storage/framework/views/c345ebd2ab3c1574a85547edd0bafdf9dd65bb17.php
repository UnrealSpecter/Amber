
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.agenda-fragments-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
bookerino index
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>