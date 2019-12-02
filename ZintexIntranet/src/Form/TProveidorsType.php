<?php

namespace App\Form;

use App\Entity\TProveidors;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TProveidorsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codiProv')
            ->add('nifProv')
            ->add('proveidor')
            ->add('proveidorCom')
            ->add('nomProv')
            ->add('cognomProv')
            ->add('carrecProv')
            ->add('dirProv')
            ->add('codpProv')
            ->add('pobProv')
            ->add('telProv')
            ->add('faxProv')
            ->add('mobProv')
            ->add('emailProv')
            ->add('webProv')
            ->add('diaPag')
            ->add('ccProv')
            ->add('observacionsProv')
            ->add('activitatProv')
            ->add('mailing')
            ->add('stock')
            ->add('tractProv')
            ->add('instPag')
            ->add('metPag')
            ->add('paisProv')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TProveidors::class,
        ]);
    }
}
