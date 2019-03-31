<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/services")
 */
class ServicesController extends AbstractController
{
    /**
     * @Route("/", name="services")
     */
    public function services()
    {
        $services = [];

        return $this->render('services.html.twig', [
            'services' => $services,
        ]);
    }

    /**
     * @Route("/build/", name="services_build")
     */
    public function build()
    {
        return $this->render('services/build.html.twig');
    }

    /**
     * @Route("/devops/", name="services_devops")
     */
    public function devops()
    {
        return $this->render('services/devops.html.twig');
    }

    /**
     * @Route("/design/", name="services_design")
     */
    public function design()
    {
        return $this->render('services/design.html.twig');
    }

    /**
     * @Route("/security/", name="services_security")
     */
    public function security()
    {
        return $this->render('services/security.html.twig');
    }

    /**
     * @Route("/testing/", name="services_testing")
     */
    public function testing()
    {
        return $this->render('services/testing.html.twig');
    }
}
