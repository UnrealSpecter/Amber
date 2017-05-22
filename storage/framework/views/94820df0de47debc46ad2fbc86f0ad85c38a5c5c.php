
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.performances-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
        <?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <h1><?php echo e($performance->name); ?></h1>
            <h1><?php echo e($performance->description); ?></h1>
            <h2><?php echo e($performance->performanceDate); ?></h2>
            <?php if($performance->video): ?>
                <a target="_blank" href="https://www.youtube.com/watch?v=<?php echo e($performance->video); ?>">https://www.youtube.com/watch?v=<?php echo e($performance->video); ?></a>
            <?php else: ?>
                <p>Geen video toegevoegd</p>
            <?php endif; ?>
            <img class="center-block img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
            <h2><?php echo e(date('F d, Y', strtotime($performance->created_at))); ?></h2>
            <a href="<?php echo e(Request::url()); ?>/<?php echo e($performance->id); ?>/edit" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-pencil"></span> Edit
            </a>
            <form method="POST" action="<?php echo e(URL::to('/Amber/performances')); ?>/<?php echo e($performance->id); ?>" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <button type="submit" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-remove"></span> Delete
            </button>
            </form>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>