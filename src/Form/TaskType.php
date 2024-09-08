<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Init' => 'Init',
                    'En attente' => 'En attente',
                    'En cours' => 'En cours',
                    'En test' => 'En test',
                    'Blocage' => 'Blocage',
                    'Terminer / recette client' => 'Terminer / recette client',
                ],
                'label' => 'Statut',
                'attr' => ['class' => 'form-select'],
            ])
        ;
    }
}
