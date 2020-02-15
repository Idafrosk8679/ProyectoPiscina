<?php

namespace App\Form;

use App\Entity\Entrenamiento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrenamientoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('series')
            ->add('descripcion')
            ->add('metros')
            ->add('estilo')
            ->add('tipos')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entrenamiento::class,
        ]);
    }
}
