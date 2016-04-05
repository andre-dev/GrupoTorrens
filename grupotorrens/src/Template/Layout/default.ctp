<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
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
    <?= $this->Html->script('modernizrr.js') ?>
    

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
