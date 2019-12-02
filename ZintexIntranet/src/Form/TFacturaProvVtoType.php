<?php

namespace App\Form;

use App\Entity\TFacturaProvVto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaProvVtoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataFraprovVto')
            ->add('concepteFraprovVto')
            ->add('instpagAuxFraprovVto')
            ->add('importFraprovVto')
            ->add('datapagFraprovVto')
            ->add('okbancFraprovVto')
            ->add('numFraprovVto')
            ->add('instpagFraprovVto')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFacturaProvVto::class,
        ]);
    }
}
