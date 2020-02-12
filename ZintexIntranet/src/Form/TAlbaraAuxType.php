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
            ->add('descripprodAlbara')
            ->add('numunitAlbara', null, ["label" => "Unitats", "required" => false, "attr" => [
                "class" => "unitAlbara"
            ]])
            ->add('preuunitAlbara', null, ["label" => "Preu", "required" => false, "attr" => ["class" => "preuUnitAlbara"]])
            ->add('preuAlbara', null, ["label" => "Subtotal", "required" => false, "attr" => ["class" => "totalAlbara"]])
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
