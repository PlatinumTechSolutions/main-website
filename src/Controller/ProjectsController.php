<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/projects")
 */
class ProjectsController extends AbstractController
{
    /**
     * @Route("/", name="projects")
     */
    public function projects()
    {
        return $this->render('projects.html.twig');
    }
}
