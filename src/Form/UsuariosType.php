<?php

namespace App\Form;

use App\Entity\Roles;
use App\Entity\Usuarios;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\QueryBuilder;

class UsuariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('nombre')
            ->add('apelllidos')
            ->add('fotoFile', FileType::class, [
                'required' => false,
                'mapped' => false,
            ])
            ->add('fechaNac', BirthdayType::class)
            ->add('pass', PasswordType::class)
            ->add('rol', EntityType::class, [
                'class' => Roles::class,
                'mapped' => true,
                'query_builder' => function (EntityRepository $er) {

                    $queryBuilder = $er->createQueryBuilder('r');

                    return $queryBuilder
                        ->where($queryBuilder->expr()->neq('r.id', 6))
                        ;
                     
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuarios::class,
        ]);
    }
}


