<?php

namespace App\Form;

use App\Entity\TColors;
use App\Entity\TGrupGral;
use App\Entity\TGrupProducte;
use App\Entity\TProductes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TProductesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('refProd')
            ->add('etiqueta')
            ->add('nomProd')
            ->add('nomProdCurt')
            ->add('descripot')
            ->add('descripal')
            ->add('foto')
            ->add('grupProducte', EntityType::class, [
                "class"=> TGrupProducte::class,
                "choice_label"=>"descripGrupProducte"
            ])
            ->add('color', EntityType::class, [
                "class"=> TColors::class,
                "choice_label"=>"color"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TProductes::class,
        ]);
    }
}
