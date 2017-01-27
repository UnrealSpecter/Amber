
<?php $__env->startSection('content'); ?>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($category->categoryName); ?></h1>
      <?php $__currentLoopData = $category->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="row">
            <div class="col-md-6"><?php echo e($entry->leftSide); ?></div>
            <div class="col-md-6">
                <span class="pull-right">
                    <?php echo e($entry->rightSide); ?>

                    <?php echo e(Form::open(['method' => 'DELETE', 'route' => array('CV.destroy', $entry->id), $entry->id])); ?>

                        <?php echo e(Form::button('<span class="glyphicon glyphicon-trash"</span>', ['type' => 'submit'])); ?>

                    <?php echo e(Form::close()); ?>

                </span>
            </div>

        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>