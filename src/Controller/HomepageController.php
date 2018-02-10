<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    /**
     *@Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage.html.twig', [
          'clients' => $this->getPastClients(),
        ]);
    }

    /**
     * @return array
     */
    private function getPastClients()
    {
        return [
            [
                'name' => 'New Scientist',
                'logo' => 'NewScientist.png',
            ],
            [
                'name' => 'Squawka',
                'logo' => 'Squawka.png',
            ],
            [
                'name' => 'Voucher Codes',
                'logo' => 'VoucherCodes.png',
            ],
            [
                'name' => 'Cognition X',
                'logo' => 'CognitionX.png',
            ],
            [
                'name' => 'Rightster',
                'logo' => 'Rightster.png',
            ],
            [
                'name' => 'IPC Meda',
                'logo' => 'IPCMedia.png',
            ],
        ];
    }
}
