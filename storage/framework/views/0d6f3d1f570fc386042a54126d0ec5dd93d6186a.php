
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.cv-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <nav class="navbar navbar-default navbar-static-top bootstrap-iso">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Create CV Entry</a>
          </div>
      </nav>

      <h1> New CV entry </h1>
      <form method="POST" action="<?php echo e(URL::to('/Amber/CV')); ?>" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Linkerkant</label>
          <input type="text" class="form-control" name="leftSide" id="title-input" placeholder="Titel">
          <label for="name-input">Rechterkant</label>
          <input type="text" class="form-control" name="rightSide" id="description-input" placeholder="Description">
          <label for="name-input">Categorie</label>
          <select class="form-control" name="category_id">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value=<?php echo e($category->id); ?>><?php echo e($category->categoryName); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </select>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>