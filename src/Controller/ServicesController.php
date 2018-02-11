<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicesController extends Controller
{
    /**
     *@Route("/services", name="services")
     */
    public function index()
    {
        return $this->render('services.html.twig');
    }

    /**
     *@Route("/services/build", name="services_build")
     */
    public function build()
    {
        return $this->render('services.html.twig');
    }

    /**
     *@Route("/services/devops", name="services_devops")
     */
    public function devops()
    {
        return $this->render('services.html.twig');
    }

    /**
     *@Route("/services/design", name="services_design")
     */
    public function design()
    {
        return $this->render('services.html.twig');
    }

    /**
     *@Route("/services/security", name="services_security")
     */
    public function security()
    {
        return $this->render('services.html.twig');
    }

    /**
     *@Route("/services/testing", name="services_testing")
     */
    public function testing()
    {
        return $this->render('services.html.twig');
    }
}
