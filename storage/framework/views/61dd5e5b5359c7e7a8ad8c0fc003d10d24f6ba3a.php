<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/global/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/global/app.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/global/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/global/style.css')); ?>">
    	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/global/nav-style.css')); ?>"/>
        <?php echo $__env->yieldContent('css'); ?>

        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo e(URL::asset('js/global/jquery-3.1.1.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/global/modernizr.2.5.3.min.js')); ?>"></script>
        <!-- <script type="text/javascript" src="../js/jquery.min.1.7.js"></script> -->
        <?php echo $__env->yieldContent('js'); ?>

        <!-- Bootstrap Date-Picker Plugin -->
        <!-- TODO do not load datepicker on every fucking page, you retard. -->
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->


        <!-- agendafragments includes -->
        <!-- <script type="text/javascript" src="../js/jquery.min.1.7.js"></script> -->

        <script>
            $(document).ready(function(){
                //datepicker code
                // var date_input=$('input[name="performanceDate"]'); //our date input has the name "date"
                // var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                // var options={
                //     format: 'yyyy-mm-dd',
                //     container: container,
                //     todayHighlight: true,
                //     autoclose: true,
                // };
                // date_input.datepicker(options);
            });

        </script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>
