<?php

namespace App\Form;

use App\Entity\TAlbaraAux;
use App\Entity\TProductes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TAlbaraAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia')
            ->add('numunitAlbara')
            ->add('preuunitAlbara')
            ->add('preuAlbara')
            ->add('codprodAlbara', EntityType::class, [
                "class" => TProductes::class,
                "choice_label" => "nomProd",
                "label" => "Producte",
                "required" => false,
                "attr" => [
                    "class" => "selectorProducte"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAlbaraAux::class,
        ]);
    }
}
