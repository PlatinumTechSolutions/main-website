<?php

require('../common.php');

?><html class="no-js" lang="en">
<head>
    <?php $t->display('head.php'); ?>
</head>
<body>

    <div id="navbar" class="navbar navbar-fixed-top">
        <?php $t->display('navigation.php'); ?>
    </div>

    <div id="welcome"></div>

    <!-- Section #1 -->
    <section id="welcome-content">
        <?php $t->display('welcome.php'); ?>
    </section>

    <section id="banner1" data-speed="2" data-type="background"></section>

    <div id="skills"></div>

    <!-- Section #2 -->
    <section id="skills-content">
        <?php $t->display('skills.php'); ?>
    </section>

    <section id="banner2" data-speed="2" data-type="background"></section>

    <div id="experience"></div>

    <!-- Section #3 -->
    <section id="experience-content">
        <?php $t->display('experience.php'); ?>
    </section>

    <section id="banner3" data-speed="2" data-type="background"></section>

    <div id="contact"></div>

    <!-- Section #4 -->
    <section id="contact-content">
        <?php $t->display('contact.php'); ?>
    </section>

    <div id="footer">
        <?php $t->display('footer.php'); ?>
    </div>

</body>
</html>
