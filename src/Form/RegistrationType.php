<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
            'label' => 'Email',
            'required' =>true,
        ])
            ->add('password', RepeatedType::class,[
            'type' => PasswordType::class,
            'invalid_message' => 'Le mot de passe doit être similaire',
            'required' =>true,
            'first_options' =>['label' => 'Mot de passe'],
            'second_options' =>['label' =>'Répéter le mot de passe']
        ])
            ->add('phone')
            ->add('firstname', TextType::class,[
                'label' => "Prénom: ",
                'required' => false
            ])
            ->add('lastname', TextType::class,[
                'label' => 'Nom: ',
                'required' => false
            ])
            ->add('address')
            ->add('send', SubmitType::class,[
            'label' => 'Envoyer'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
