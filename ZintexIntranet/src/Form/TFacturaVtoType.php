<?php

namespace App\Form;

use App\Entity\TFacturaVto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaVtoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataVto')
            ->add('concepteVto')
            ->add('instpagAux')
            ->add('importVto')
            ->add('datapagVto')
            ->add('importpagVto')
            ->add('okbancVto')
            ->add('numFactura')
            ->add('instpag')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFacturaVto::class,
        ]);
    }
}
