<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- jQuery -->
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

        <!-- Bootstrap Date-Picker Plugin -->
        <!-- TODO do not load datepicker on every fucking page, you retard. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <link rel="stylesheet" href="../css/justifiedGallery.min.css" />
        <script src="../js/jquery.justifiedGallery.min.js"></script>
        <script src="../js/jquery.colorbox-min.js"></script>
        <link rel="stylesheet" href="../css/colorbox.css" />

        <!-- fotoblog foto animations -->
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <script src="../js/viewportchecker.js"></script>

        <script>
            $(document).ready(function(){
              
                //photoblog viewport cheker
                $('.fotoblog').addClass("hideme").viewportChecker({
                    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                    offset: 300
                });

                $('.fotoblog-tekst').addClass("hideme").viewportChecker({
                    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
                    offset: 300
                });

                $('.fotoblog-date').addClass("hideme").viewportChecker({
                    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
                    offset: 300
                });
                
                //datepicker code
                var date_input=$('input[name="performanceDate"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
                
                //justified gallery
                $("#mygallery").justifiedGallery({
                    rowHeight : 200,
                    lastRow : 'nojustify',
                    margins : 3
                });

                // }).on('jg.complete', function () {
                //     $(this).find('a').colorbox({
                //         maxWidth : '80%',
                //         maxHeight : '80%',
                //         opacity : 0.8,
                //         transition : 'elastic',
                //         current : ''
                //     });
                // });
                           
            });


        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        .hideme{
         opacity:0;
        }
        .visible{
         opacity:1;
        }
        body {
            background: url('../uploads/background.jpg');
        }

        @font-face {
            font-family: "Courier";
            src: url('../fonts/courier.ttf') format("truetype");
        }

        h1, h2, h3 {
            font-family: "Courier";
        }
      /*      html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- content is put here ! -->
                @yield('content')
            </div>
        </div>
    </body>
</html>
