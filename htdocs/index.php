<?php

require('../common.php');

?><html class="no-js" lang="en">
<head>
    <?php $t->display('head.php'); ?>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
</head>
<body>

<div class="site-wrapper">
    <!-- navigation -->
    <?php //$t->display('navigation.php'); ?>

    <div class="container">
        <!-- logo -->
        <?php $t->display('brand.php'); ?>
        <!-- skills -->
        <?php $t->display('skills.php'); ?>
        <!-- experience -->
        <?php $t->display('experience.php'); ?>
        <!-- contact -->
        <?php $t->display('contact.php'); ?>
    </div>

    <!-- footer -->
    <?php $t->display('footer.php'); ?>
</div>

</body>
</html>
