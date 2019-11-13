<?php

namespace App\Form;

use App\Entity\TFraproformaAux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia')
            ->add('grupProducte')
            ->add('codprodProforma')
            ->add('descripprodProforma')
            ->add('codparamimpProforma')
            ->add('descripparamimpProforma')
            ->add('numunitProforma')
            ->add('preuunitProforma')
            ->add('preuProforma')
            ->add('baixa')
            ->add('marcat')
            ->add('prodPrincipal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaAux::class,
        ]);
    }
}
