<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.cv-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($category->categoryName); ?></h1>
      <a class="btn btn-small btn-info" href="<?php echo e(URL::to('Amber/CV/categories/' . $category->id . '/edit')); ?>">Edit</a>
      <?php echo e(Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]])); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

      <?php echo e(Form::close()); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>