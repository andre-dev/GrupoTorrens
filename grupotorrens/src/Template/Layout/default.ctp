<?php
    $cakeDescription = 'Grupo Torrens';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
    <!--CSS Grupo Torrens -->
    <?= $this->Html->css('bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.css') ?>
    <?= $this->Html->css('owl.transitions.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('lightbox.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    
    <!-- JS Grupo Torrens -->
    <?= $this->Html->script('amodernizrr.js') ?>
    
    <?= $this->Html->script('jquery-2.1.3.min.js') ?>
    <?= $this->Html->script('jquery-migrate-1.2.1.min.js') ?>
    <?= $this->Html->script('bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('jquery.appear.js') ?>
    <?= $this->Html->script('jquery.fitvids.js') ?>
    <?= $this->Html->script('jquery.nicescroll.min.js') ?>
    <?= $this->Html->script('lightbox.min.js') ?>
    <?= $this->Html->script('count-to.js') ?>
    <?= $this->Html->script('styleswitcher.js') ?>
    
    <?= $this->Html->script('map.js') ?>
    <?= $this->Html->script('https://maps.googleapis.com/maps/api/js?sensor=false') ?>
    <?= $this->Html->script('script.js') ?>

    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>
    
    <?= $this->fetch('content') ?>
   
<footer>
</footer>

</body>

</html>
