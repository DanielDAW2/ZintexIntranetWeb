<?php

namespace App\Form;

use App\Entity\TAlbaraAux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TAlbaraAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia')
            ->add('descripprodAlbara')
            ->add('codparamimpAlbara')
            ->add('descripparamimpAlbara')
            ->add('numunitAlbara')
            ->add('preuunitAlbara')
            ->add('preuAlbara')
            ->add('numAlbara')
            ->add('codprodAlbara')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAlbaraAux::class,
        ]);
    }
}
