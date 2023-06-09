<?php

namespace App\Form;

use App\Entity\Anneepedagogique;
use App\Entity\Classe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnneepedagogiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelleAnnee', TextType::class,
                    array('label'=>'Libellé:  ',
                    'required'=>true,
                    'attr'=>array('class'=>'form-control')))

            ->add('classe', EntityType::class, [
                    'class' => Classe::class,
                    'choice_label' => 'getLibelle',
                    'attr'=>array('class'=>'form-control form-control-sm ', "style"=>"width:100%;"),
                    'required'=>true,
                    'label'=>'Classe :',
   
              ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Anneepedagogique::class,
        ]);
    }
}
