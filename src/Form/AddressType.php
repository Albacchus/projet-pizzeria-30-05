<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', TextType::class,[
                'label' => 'ville',
                'required' => true
            ])
            ->add('street', TextType::class,[
                'label' => 'N° de la rue',
                'required' => true
            ])
            ->add('zipCode',TextType::class,[
                'label' => 'Code postale',
                'required' => true
            ])
            ->add('supplement',TextType::class,[
                'label' => 'Copmplément(interphone, étage, etc..).',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
