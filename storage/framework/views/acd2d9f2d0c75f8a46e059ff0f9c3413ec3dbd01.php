

<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
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
        <a class="navbar-brand" href="#">Fotoblog Overview</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/Amber/dashboard/fotoblog-overview">Overview</a></li>
          <li class="active"><a href="/Amber/dashboard/fotoblog-create">Create</a></li>
          <li><a href="/Amber/dashboard/fotoblog-edit">Edit</a></li>
          <li><a href="/Amber/dashboard/fotoblog-delete">Delete</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <h1> New Fotoblog entry </h1>
  <form method="POST" action="<?php echo e(URL::to('/Amber/performances')); ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name-input">Naam</label>
      <input type="text" class="form-control" name="name" id="title-input" placeholder="Titel">
      <label for="name-input">Omschrijving</label>
      <input type="text" class="form-control" name="description" id="description-input" placeholder="Description">
      <label for="name-input">Image</label>
      <input type="file" name='mediaItem' id='file'>
      <label class="control-label" for="date">Datum van optreden</label>
      <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" type="text"/>

      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </div>
    <button type="submit" class="btn btn-lg">Save</button>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>