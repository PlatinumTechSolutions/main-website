<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name', TextType::class, [
        'attr' => ['placeholder' => 'Name'],
        'label' => false,
      ])
      ->add('email', EmailType::class, [
        'attr' => ['placeholder' => 'Email'],
        'label' => false,
      ])
      ->add('mobile', TelType::class, [
        'attr' => ['placeholder' => 'Mobile Number'],
        'label' => false,
        'required' => false,
      ])
      ->add('website', TextType::class, [
        'attr' => ['placeholder' => 'Website'],
        'label' => false,
        'required' => false,
      ])
      ->add('message', TextareaType::class, [
        'attr' => ['placeholder' => 'Message', 'rows' => 7],
        'label' => false,
      ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      // uncomment if you want to bind to a class
      //'data_class' => Contact::class,
    ]);
  }
}
