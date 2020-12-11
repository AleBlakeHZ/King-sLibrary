<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Assets/css/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Assets/css/bootstrap.min.css">
    <script type="text/javascript" href="<?php echo base_url();?>/Assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="<?php echo base_url();?>/Assets/js/pooper.min.js"></script>
    <script type="text/javascript" href="<?php echo base_url();?>/Assets/js/jquery.min.js"></script>
    <script type="text/javascript" href="<?php echo base_url();?>/Assets/js/pooper.min.js"></script> 
    <script defer src="<?php echo base_url();?>/Assets/java/main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Carrusel Popular-->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
    var current = 0;
    var imagenes = new Array();
    
    $(document).ready(function() {
        var numImages = 6;
        if (numImages <= 3) {
            $('.right-arrow').css('display', 'none');
            $('.left-arrow').css('display', 'none');
        }
    
        $('.left-arrow').on('click',function() {
            if (current > 0) {
                current = current - 1;
            } else {
                current = numImages - 3;
            }
    
            $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
    
            return false;
        });
    
        $('.left-arrow').on('hover', function() {
            $(this).css('opacity','0.5');
        }, function() {
            $(this).css('opacity','1');
        });
    
        $('.right-arrow').on('hover', function() {
            $(this).css('opacity','0.5');
        }, function() {
            $(this).css('opacity','1');
        });
    
        $('.right-arrow').on('click', function() {
            if (numImages > current + 3) {
                current = current+1;
            } else {
                current = 0;
            }
    
            $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
    
            return false;
        }); 
    });
    </script>
</head>

<body>
