<?php

namespace App\Form;

use App\Entity\SesionUsuarios;
use App\Entity\Usuarios;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SesionUsuariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('asistencia', ChoiceType::class, array(
                'choices' => array(
                    'Si' => 'Si',
                    'No' => 'No',
                ))
            )
            ->add('comentario')
            ->add('dni')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SesionUsuarios::class,
        ]);
    }
}
