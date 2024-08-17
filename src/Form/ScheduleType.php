<?php

namespace App\Form;

use App\Entity\Schedule;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScheduleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'label' => 'Data do agendamento:',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ])
            ->add('hour', TimeType::class, [
                'label' => 'Hora do agendamento:',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out timepicker',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ])
            ->add('service', EntityType::class, [
                'label' => 'Escolha o serviço:',
                'class' => Service::class,
                'choice_label' => 'name',
                'placeholder' => '--Selecione--',
                'attr' => [
                    'class' => 'mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500 transition duration-150 ease-in-out',
                ],
                'label_attr' => [
                    'class' => 'block text-gray-700 font-medium'
                ]
            ])
            ->add('client', ClientType::class, [
                'label_attr' => ['class' => 'hidden']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Schedule::class,
        ]);
    }
}
