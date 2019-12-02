<?php

namespace App\Form;

use App\Entity\TFacturaProv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaProvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numFraprov')
            ->add('dataFraprov')
            ->add('dataVtoFraprov')
            ->add('dataEntradaProv')
            ->add('bimpFraprov')
            ->add('ivaFraprov')
            ->add('totalFraprov')
            ->add('ivaInclos')
            ->add('importPendent')
            ->add('importPagat')
            ->add('reDto')
            ->add('exentIva')
            ->add('proveidor')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFacturaProv::class,
        ]);
    }
}
