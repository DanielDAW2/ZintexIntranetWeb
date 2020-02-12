<?php

namespace App\Form;

use App\Entity\TFacturaAux;
use App\Entity\TProductes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia', NumberType::class, [
                "required" => false,
                "attr" => [
                    "read_only" => true,
                    "class" => "linea"
                ]
            ])
            ->add('descripprodFactura',  TextType::class, [
                "label" => "Impresió",
                "required" => false
            ])
            ->add('numunitFactura', null, ["label" => "Unitats", "required" => false, "attr" => [
                "class" => "unitFact"
            ]])
            ->add('preuunitFactura',  null, ["label" => "Unitats", "required" => false, "attr" => [
                "class" => "preuUnitFact"
            ]])
            ->add('preuFactura', null, ["label" => "Subtotal", "required" => false, "attr" => ["class" => "totalAuxFCT"]])
            ->add('codprodFactura', EntityType::class, [
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
            'data_class' => TFacturaAux::class,
        ]);
    }
}
