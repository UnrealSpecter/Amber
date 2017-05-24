<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid hidden-sm hidden-xs">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand animated fadeInRight" style="font-family: courier; " href="/">
          <h1 style="padding: 0; margin: 0;">Amber Rozema</h1>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right animated fadeInDown">
        <li><a href="/">HOME</a></li>
        <li><a href="/theatre">THEATRE</a></li>
        <li><a href="/myworks">MY WORKS</a></li>
        <li><a href="/photography">PHOTOGRAPHY</a></li>
        <li><a href="/curriculumvitae">CURRICULUM VITAE</a></li>
        <li><a href="/diaryfragments">DIARY FRAGMENTS</a></li>
        <li><a href="http://www.amberrozema.tumblr.com">FANCY FIGMENTS</a></li>
        <li><a href="https://www.etsy.com/nl/people/amberrozema ">SHOP</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="hidden-lg hidden-md" onclick="openNav()" style="height:100%; width: 100%; display: flex; flex-flow: row; justify-content: center; align-items: center;">
    <!-- Use any element to open/show the overlay navigation menu -->
    <div style="cursor: pointer; height: 100%; display: flex; flex-flow: column; justify-content: center;">
        <div class="mobile-menu-bar"></div>
        <div class="mobile-menu-bar"></div>
        <div class="mobile-menu-bar"></div>
    </div>
    <span class="open-menu-button">menu</span>

  </div>
</nav>
<?php echo $__env->make('amber.resources.mobile-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
