<?php

namespace App\Form;

use App\Entity\TProductes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TProductesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ordre')
            ->add('refProd')
            ->add('etiqueta')
            ->add('nomProd')
            ->add('nomProdCurt')
            ->add('descripot')
            ->add('descripal')
            ->add('baixa')
            ->add('disseny')
            ->add('produccio')
            ->add('foto')
            ->add('grupProducte')
            ->add('color')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TProductes::class,
        ]);
    }
}
