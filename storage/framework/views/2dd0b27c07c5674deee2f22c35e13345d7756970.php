<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.cv-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($category->categoryName); ?></h1>
      <a class="btn btn-small btn-info" href="<?php echo e(URL::to('Amber/CV/categories/' . $category->id . '/edit')); ?>">Edit</a>
      <?php echo e(Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]])); ?>

        <?php echo e(Form::hidden('id', $category->id)); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn', 'btn-danger'])); ?>

      <?php echo e(Form::close()); ?>

      <?php $__currentLoopData = $category->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="row">
            <div class="col-md-6"><?php echo e($entry->leftSide); ?></div>
            <div class="col-md-6">
            <?php echo e($entry->rightSide); ?>

                <span class="pull-right">
                    <?php echo e(Form::open(['method' => 'DELETE', 'route' => array('CV.destroy', $entry->id), $entry->id])); ?>

                        <?php echo e(Form::button('<span class="glyphicon glyphicon-trash"</span>', ['type' => 'submit'])); ?>

                    <?php echo e(Form::close()); ?>

                </span>
                <span class="pull-right">
                    <?php echo e(Form::open(['method' => 'GET', 'route' => array('CV.edit', $entry->id), $entry->id])); ?>

                        <?php echo e(Form::button('<span class="glyphicon glyphicon-pencil"</span>', ['type' => 'submit'])); ?>

                    <?php echo e(Form::close()); ?>

                </span>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>