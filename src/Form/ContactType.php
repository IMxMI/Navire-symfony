<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Validator\Constraints\Email;
use Doctrine\DBAL\Types\DateTimeType;

class ContactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
                ->add('Nom', TextType::class, [
                    'required' => true,
                ])
                ->add('Prenom', TextType::class, [
                    'required' => true,
                ])
                ->add('Mail', TextType::class, [
                    'required' => true,
                ])
                ->add('Message', TextType::class, [
                    'required' => true,
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
