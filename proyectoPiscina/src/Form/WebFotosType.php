<?php

namespace App\Form;

use App\Entity\WebFotos;
use App\Entity\Usuarios;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\QueryBuilder;

class WebFotosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('foto')
            ->add('descripcion')
            ->add('idUsuario', EntityType::class, [
                'class' => Usuarios::class,
                'mapped' => true,
                'query_builder' => function (EntityRepository $er) {

                    $queryBuilder = $er->createQueryBuilder('u');

                    return $queryBuilder
                        ->where($queryBuilder->expr()->isNotNull('u.foto'));
                        
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => WebFotos::class,
        ]);
    }
}
