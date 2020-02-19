<?php

namespace App\Form;

use App\Entity\TClients;
use App\Entity\TOrdreTreball;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TOrdreTreballType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomClient', EntityType::class, ["class"=>TClients::class, "choice_label"=>"client"])
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
