<?php

namespace App\Form;

use App\Entity\TAlbara;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TAlbaraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripClientAlbara')
            ->add('nomClientAlbara')
            ->add('direccioClientAlbara')
            ->add('numAlbara')
            ->add('dataAlbara')
            ->add('dataSortidaAlbara')
            ->add('nrefAlbara')
            ->add('srefAlbara')
            ->add('facturableAlbara')
            ->add('numfraproformaAlbara')
            ->add('numfacturaAlbara')
            ->add('clientAlbara')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAlbara::class,
        ]);
    }
}
