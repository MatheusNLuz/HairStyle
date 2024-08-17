<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Insira seu nome:',
                'attr' => [
                    'class' => 'mt-1 mb-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Insira seu e-mail:',
                'attr' => [
                    'class' => 'my-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Insira seu telefone:',
                'attr' => [
                    'class' => 'my-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}