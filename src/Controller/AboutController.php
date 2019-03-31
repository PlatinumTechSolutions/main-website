<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/about")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="about")
     */
    public function about()
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/clients/", name="about_clients")
     */
    public function clients()
    {
        $clients = [
            [
                'name'  => 'New Scientist',
                'logo'  => 'NewScientist.png',
                'class' => 'new-scientist',
                'tasks' => [
                    'Migrated website and FTP services from RBI managed systems to RackSpace',
                    'Creation of new release management tools and processes',
                    'Performance improvements to the existing website, including Database quiery optimation and replacement of the cache solution',
                    'Assisted in regular code reviews and guidance given to the junior members of the team',
                    'CI / CD tool development',
                    'Better test coverage including Behat, PHPSpec & PHPUnit tests',
                    'Started to replace legacy Wordpress site with Symfony4 components',
                    'Deployed in AWS with Elastic Beanstalk'
                ],
                'tags' => [
                    'Symfony4', 'PHP7', 'AWS', 'RackSpace', 'Jenkins', 'RDS',
                    'Elastic Beanstalk', 'Auto-scaling', 'Database Profiling',
                    'Full Page Caching', 'Wordpress', '3rd Party APIs', 'DevOps',
                    'Elasticache', 'Vagrant', 'JIRA',
                ]
            ],
            [
                'name'  => 'Squawka',
                'logo'  => 'Squawka.png',
                'class' => 'squawka',
                'tasks' => [
                    'Designed and built replacement statistics service built on Symfony3 & ElasticSearch',
                    'Maintainance of existing REST APIs written in Symfony2',
                    'Development conducted with TDD amd integrated with Travis CI',
                    'Assisted in regular code reviews for the wider team',
                ],
                'tags' => [
                    'PHP5', 'Symfony3', 'ElasticSearch', 'Doctrine', 'REST', 'Docker',
                    'Travis', 'TDD', 'PHPUnit', 'JIRA', 'DevOps',
                ],
            ],
            [
                'name'  => 'Voucher Codes',
                'logo'  => 'VoucherCodes.png',
                'class' => 'voucher-codes',
                'tasks' => [
                    'New Customer Rewards system built to provided specification, written in clients bespoke framework',
                    'Optimised existing test suit to allow better use of CI / CD tools',
                    'Assisted in regular code reviews for the wider team',
                ],
                'tags'  => [
                    'PHP5', 'Smarty', 'MySQL', 'Memcache', 'TeamCity', 'Docker', 'JIRA'
                ],
            ],
            [
                'name'  => 'Cognition X',
                'logo'  => 'CognitionX.png',
                'class' => 'cognition-x',
                'tasks' => [
                    'Advised and supported the development team on ElasticSearch including best practices,
                    and techniques to get the most from the technology'
                ],
                'tags'  => [
                    'ElasticSearch', 'AWS', 'REST'
                ],
            ],
            [
                'name'  => 'Rightster',
                'logo'  => 'Rightster.png',
                'class' => 'rightster',
                'tasks' => [
                    'Lead the development of an API designed to service a B2B video platform',
                    'Optimised existing test suit to allow better use of CI / CD tools',
                    'Introduced ElasticSearch into the codebase to improve video search',
                    'Assisted in regular code reviews for the wider team'
                ],
                'tags'  => [
                    'PostFreSQL', 'PHP5', 'ElasticSearch', 'AWS', 'Redis', 'Memcache',
                    'Akamai', 'Git', 'encoding.com API', 'Google Drive API', 'Jenkins',
                    'TDD',
                ],
            ],
            [
                'name'  => 'IPC Meda',
                'logo'  => 'IPCMedia.png',
                'class' => 'ipc-media',
                'tasks' => [
                    'Lead the development of multiple websites & the shared CMS',
                    'Assisted with the QA & Test Team with story collection, analysis and sizing',
                    'Updated and improved the an image system called MediaBank used to store and serve images for multiple websites',
                    'Assisted in the launch of their first mobile optimisted websites',
                    'Create an API in Symfony2 and MongoDB to power the mobile optimisted websites'
                ],
                'tags' => [
                    'PHP5', 'Symfony', 'SOLR', 'REST', 'Savvis', 'SubVersion', 'MySQL',
                    'Akamai', 'Jenkins', 'TDD', 'PHPUnit', 'Selenium', 'MongoDB',
                ],
            ],
        ];

        return $this->render('about/clients.html.twig', [
            'clients' => $clients,
        ]);
    }

    /**
     * @Route("/careers/", name="about_careers")
     */
    public function careers()
    {
        return $this->render('about/careers.html.twig');
    }
}
