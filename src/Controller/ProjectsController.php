<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/projects")
 */
class ProjectsController extends Controller
{
    /**
     * @Route("/", name="projects")
     */
    public function index()
    {
        return $this->render('projects.html.twig');
    }

    /**
     * @Route("/aws/", name="projects_aws")
     */
    public function aws()
    {
        return $this->render('projects/aws.html.twig');
    }

    /**
     * @Route("/elasticSearch/", name="projects_elastic_search")
     */
    public function elasticSearch()
    {
        return $this->render('projects/elasticSearch.html.twig');
    }

    /**
     * @Route("/gdpr/", name="projects_gdpr")
     */
    public function gdpr()
    {
        return $this->render('projects/gdpr.html.twig');
    }

    /**
     * @Route("/symfony/", name="projects_symfony")
     */
    public function symfony()
    {
        return $this->render('projects/symfony.html.twig');
    }

    /**
     * @Route("/wordpress", name="projects_wordpress")
     */
    public function wordpress()
    {
        return $this->render('projects/wordpress.html.twig');
    }
}
