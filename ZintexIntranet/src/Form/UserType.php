<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('roles',ChoiceType::class, [
                "choices"=> [
                    "Usuario"=>"ROLE_USER",
                    "Administrador"=>"ROLE_ADMIN"
                ],
                "multiple"=>true,
                "expanded"=>true
            ])
            ->add('nombre')
            ->add('apellidos')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
