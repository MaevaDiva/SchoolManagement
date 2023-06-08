<?php

namespace App\Form;

use App\Entity\Eleve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule')
            ->add('username')
            ->add('prenom')
            ->add('nom')
            ->add('adresse')
            ->add('nomcompletTuteur')
            ->add('telephoneTuteur')
            ->add('emailTuteur')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('photo')
            ->add('classe')
            ->add('sexe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
