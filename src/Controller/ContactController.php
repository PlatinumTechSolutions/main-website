<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contact")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact")
     */
    public function contact(
        Request $request,
        MailerInterface $mailer
    ): Response {
        $form = $this->createForm(ContactType::class, null, [
            'action' => $this->generateUrl('contact'),
            'attr' => [
                'id' => 'contact-form',
            ],
        ]);

        $form->handleRequest($request);

        if ($success = ($form->isSubmitted() && $form->isValid())) {
            $contactFormData = $form->getData();

            $message = (new TemplatedEmail())
                ->to(new Address('contracts@platinumtechsolutions.co.uk'))
                ->from(new Address(
                    'no-reply@platinumtechsolutions.co.uk',
                    'Platinum Tech Solutions'
                ))
                ->subject(date('l jS \of F Y h:i:s A'))
                ->htmlTemplate('emails/contact.html.twig')
                ->context([
                    'form_data' => $contactFormData,
                ]);

            $mailer->send($message);
        }

        return $this->render('contact.html.twig', [
            'contact_form' => $form->createView(),
            'success' => $success,
        ]);
    }
}
