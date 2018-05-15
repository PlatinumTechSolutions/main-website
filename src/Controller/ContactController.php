<?php

namespace App\Controller;

use Swift_Mailer;
use Swift_Message;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class, null, [
            'action' => $this->generateUrl('contact'),
        ]);

        $form->handleRequest($request);

        if ($success = ($form->isSubmitted() && $form->isValid())) {
            $contactFormData = $form->getData();

            $message = (new Swift_Message(date('l jS \of F Y h:i:s A')))
                ->setFrom(['no-reply@platinumtechsolutions.co.uk' => "Platinum Tech Solutions"])
                ->setTo('contracts@platinumtechsolutions.co.uk')
                ->setBody($this->renderView('emails/contact.html.twig', [
                    'form_data' => $contactFormData,
                ]), 'text/html');

            $mailer->send($message);
        }

        return $this->render('contact.html.twig', [
            'contact_form' => $form->createView(),
            'success' => $success,
        ]);
    }
}
