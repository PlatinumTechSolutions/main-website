<?php

$experiences = [];

$experiences[] = [
    'logo'   => '/images/clients/100x200-voucher-codes.jpg',
    'class'  => 'vouchercodes',
    'name'   => 'VoucherCodes.co.uk',
    'dates'  => 'March 2016 - current',
    'skills' => [
        'PHP', 'MySQL', 'Memcache', 'Git', 'TeamCity', 'TDD', 'JIRA', 'Agile', 'PHPUnit',
    ],
    'info' => [
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-kurt-geiger.jpg',
    'class'  => 'kurt-geiger',
    'name'   => 'Kurt Geiger',
    'dates'  => 'January 2016 - February 2016',
    'skills' => [
        'PHP', 'MySQL', 'AWS', 'Memcache', 'Symfony3', 'Doctrine', 'Git', 'GO-CD', 'BDD', 'Behat', 'TDD', 'JIRA', 'Agile', 'PHPUnit'
    ],
    'info' => [
        'Developing a custom CMS tool in Symfony3 (3.0.1) to control blocks of content across multiple websites.',
        'Deployed in AWS and using GO-CD for continuous delivery. Developed in an Agile way and using TDD with a mixture of PHPUnit and Behat.',
        'Code Review is conducted on all Pull Requests before they are accepted into the main develop branch. Work is conducted in 2 week sprints with an end demo to stakeholders each iteration.',
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-bafta-research.jpg',
    'class'  => 'bafta',
    'name'   => 'BAFTA Research',
    'dates'  => 'November 2015 - December 2015',
    'skills' => [
        'PHP', 'MySQL', 'AWS', 'Memcache', 'Symfony2', 'Doctrine', 'Git', 'Jenkins',  'BDD', 'Behat', 'TDD', 'JIRA', 'Agile', 'PHPUnit'
    ],
    'info' => [
        'Consulting on the development a the visible rights video portal. Written in Symfony2 and using an in-house API to transcode videos, the system was a MVP to allow researchers to upload video clips for producers and publishers to shortlist from.',
        'Code Review is conducted on all Pull Requests before they are accepted into the main dev branch. Work is conducted in 1 week agile sprints.',
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-rightster.png',
    'class'  => 'rightster',
    'name'   => 'Rightster',
    'dates'  => 'July 2013 - November 2015',
    'skills' => [
        'PHP', 'PostGreSQL', 'ElasticSearch', 'AWS', 'Redis', 'Memcache', 'Akamai', 'Git', 'encoding.com API', 'Google Drive API', 'Jenkins', 'TDD', 'JIRA',  'Agile', 'PHPUnit'
    ],
    'info' => [
        'Working as the Technical Lead to the core platform, this included an in-house created MVC framework deployed on AWS instances. Using PostGreSQL and ElasticSearch for storage, as well as Akamai, Cloudfront, Redis and Memcache for caching.',
        'Platform unit tests are written in PHPUnit and run on every GitHub Pull Request by a Jenkins cluster. Code Review and QA is conducted on all Pull Requests before they are accepted into the main dev branch. Work is conducted in 2 week agile sprints.',
    ],
    'links' => [
        'https://my.rightster.com/' => 'my.rightster.com',
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-time-inc-uk.jpeg',
    'class'  => 'time',
    'name'   => 'Time Inc. UK (formally IPC Media)',
    'dates'  => 'April 2008 - June 2013',
    'skills' => [
        'PHP', 'MySQL', 'SOLR', 'SubVersion', 'Git', 'Memcache', 'Akamai', 'Savvis', 'REST', 'Jenkins', 'Symfony MVC', 'TDD', 'Selenium', 'PHPUnit', 'MongoDB'
    ],
    'info' => [
        'Projects included the main CMS system for over 30 magazine websites. Bespoke galleries API written for House to Home. Recipe search engine updates including faceted search within SOLR. API service to power mobile optimised versions of 20 magazine websites.',
        'Release Management for serval critial system updates, including the migration of most magazine websites to a new image storage service.',
    ],
    'links' => [
        'http://www.housetohome.co.uk/' => 'housetohome',
        'http://www.goodotoknow.co.uk/' => 'goodtoknow',
        'http://www.womanandhome.com/'  => 'womanandhome',
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-scee.png',
    'class'  => 'scee',
    'name'   => 'Sony PlayStation',
    'dates'  => 'July 2005 - April 2008',
    'skills' => [
        'PHP', 'PostGreSQL', 'SubVersion', 'Memcache', 'XHTML', 'CSS', 'JavaScript', 'Multilingual', 'gettext', 'Selenium'
    ],
    'info' => [
        'Helped to build and improve the PlayStation Developer Network (SceDev) which allows game developers to download tools and software to developer games on several PlayStation titles including the PSP and PS3 formats. The system also provided an internal bug tracking solution written in PHP and PostGreSQL, which was translated into 3 languages by gettext.',
    ],
    'links' => [
        'https://www.scedev.net/' => 'scedev',
    ],
];
$experiences[] = [
    'logo'   => '/images/clients/100x200-purefm.jpg',
    'class'  => 'pure',
    'name'   => 'PURE FM (Portsmouth University Radio)',
    'dates'  => 'July 2005 - Summer 2008',
    'skills' => [
        'PHP', 'MySQL', 'SubVersion', 'XHTML', 'CSS', 'JavaScript', 'Audio Streaming'
    ],
    'info' => [
        'Working with university students to improve the radio station website and introducing best practices including SVN source control and design patterns. Helping with the rebrand and relaunch of the student website as well as provide a framework to allow them to build and maintain their own DJ &amp; Show Profile pages.'
    ],
    'links' => [
        'http://www.purefm.com/' => 'purefm.com',
    ],
];

?>
<div id="experience">
    <div class="page-header">
        <h2>Experience <small>Companies I've worked with</small></h2>
    </div>

<?php foreach ($experiences as $experience) { ?>

    <div class="experience">
        <div class="logo logo-<?php echo $experience['class'] ?>">
            <img src="<?php echo $experience['logo'] ?>" alt="<?php echo $experience['name'] ?>" />
        </div>
        <div class="role">
            <h2 style="display: none;"><?php echo $experience['name'] ?></h2>
            <h3><small><?php echo $experience['dates'] ?></small></h3>
            <ul class="skills">
            <?php foreach ($experience['skills'] as $skill) { ?>
                <li><?php echo $skill ?></li>
            <?php } ?>
            </ul>

            <?php foreach($experience['info'] as $para) { ?>
                <p><?php echo $para ?></p>
            <?php } ?>

        <?php if (count($experience['links'])) { ?>
            <ul class="links">
            <?php foreach ($experience['links'] as $href => $text) { ?>
                <li><a target="_blank" href="<?php echo $href ?>"><?php echo $text ?></a></li>
            <?php } ?>
            </ul>
        <?php } ?>

        </div>
    </div>

<?php } ?>

</div>
