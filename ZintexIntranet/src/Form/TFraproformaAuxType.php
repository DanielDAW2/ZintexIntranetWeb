<?php

namespace App\Form;

use App\Entity\TFraproformaAux;
use App\Entity\TProductes;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia')
            ->add('codprodProforma', EntityType::class, [
                "class"=>TProductes::class,
                "choice_label"=>"nomProd",
                "label"=>"Producte",
                "attr" => [
                    "class" => "selectorProducte"
                ]
            ])
            ->add('descripprodProforma', TextType::class, [
                "label"=>"Impresió"
            ])
            ->add('numunitProforma', null, ["label"=>"Unitats"])
            ->add('preuunitProforma', null,["label"=>"Preu"])
            ->add('preuProforma', null,["label"=>"Subtotal"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaAux::class,
        ]);
    }
}
