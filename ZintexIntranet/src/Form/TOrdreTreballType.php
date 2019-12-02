<?php

namespace App\Form;

use App\Entity\TOrdreTreball;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TOrdreTreballType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomClient')
            ->add('numSubordre')
            ->add('campanya')
            ->add('descripOrdreTreball')
            ->add('proveidor')
            ->add('entregaDisseny')
            ->add('sortidaCalandra')
            ->add('sortidaImpressio')
            ->add('sortidaProduccio')
            ->add('entregaClient')
            ->add('dissenyador')
            ->add('postaMarxa')
            ->add('calandra')
            ->add('anonim')
            ->add('adre�aEntrega')
            ->add('recullClient')
            ->add('portsDeguts')
            ->add('serveiUrgent830')
            ->add('serveiUrgent10')
            ->add('serveiUrgent12')
            ->add('serveiUrgent14')
            ->add('observacionsDisseny')
            ->add('observacionsProduccio')
            ->add('persona')
            ->add('resumUnitats')
            ->add('resumProductes')
            ->add('unitats')
            ->add('numClient')
            ->add('grupProducte')
            ->add('numFraproforma')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TOrdreTreball::class,
        ]);
    }
}
