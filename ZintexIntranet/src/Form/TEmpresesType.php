<?php

namespace App\Form;

use App\Entity\TEmpreses;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TEmpresesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marca')
            ->add('empresa')
            ->add('titular')
            ->add('nif')
            ->add('direccio')
            ->add('codpos')
            ->add('poblacio')
            ->add('telefon')
            ->add('fax')
            ->add('email')
            ->add('web')
            ->add('numPresup')
            ->add('numProforma')
            ->add('numAlbara')
            ->add('numFra')
            ->add('numClient')
            ->add('numFrarectif')
            ->add('pathLogo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TEmpreses::class,
        ]);
    }
}
