<?php

namespace App\Form;

use App\Entity\Service;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nome do serviço'
            ])
            ->add('price', TextType::class, [
                'label' => 'Preço do serviço'
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Categoria do serviço',
                'choices' => [
                    'Barbeiro' => 'Barbeiro',
                    'Trancista' => 'Trancista'
                ],
                'placeholder' => '--Selecione--'
            ])
            ->add('user', EntityType::class, [
                'label' => 'Nome do Profissional',
                'class' => User::class,
                'choice_label' => 'name',
                'placeholder' => '--Selecione--'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}