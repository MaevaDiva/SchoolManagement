<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Sexe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class EleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule', TextType::class,
                array('label'=>'Matricule:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
            ->add('prenom', TextType::class,
                array('label'=>'Prénom:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
            ->add('nom', TextType::class,
                array('label'=>'Nom:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
            ->add('adresse', TextType::class,
                array('label'=>'Adresse:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
            ->add('nomcompletTuteur', TextType::class,
                array('label'=>'Nom complet:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
            ->add('telephoneTuteur', TextType::class,
                array('label'=>'Téléphone:  ',
                'required'=>true,
                'attr'=>array('class'=>'form-control')))
           
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'libelle',
                'placeholder' => "Sélectionner ...",
                'attr'=>array('class'=>'form-control form-control-sm ', "style"=>"width:100%;"),
                'required'=>true,
                'label'=>'Classe :',
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo',
                'mapped' => false,
                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/*',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid JPG document',
                        ])
                ],
            ])
            ->add('sexe', EntityType::class, [
                'class' => Sexe::class,
                'choice_label' => 'libelle',
                'placeholder' => "Sélectionner ...",
                'attr'=>array('class'=>'form-control form-control-sm ', "style"=>"width:100%;"),
                'required'=>true,
                'label'=>'Sexe :',

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
