<?php

namespace App\Form;

use App\Entity\TGrupProducte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TGrupProducteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numGrupProducte')
            ->add('descripGrupProducte')
            ->add('admetMarcatge')
            ->add('grupGral')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TGrupProducte::class,
        ]);
    }
}
