<?php

namespace App\Form;

use App\Entity\TFraproformaAux;
use App\Entity\TProductes;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaAuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numLinia', NumberType::class, [
                "required"=>false,
                "attr"=>[
                    "read_only"=> true
                ]
            ])
            ->add('codprodProforma', EntityType::class, [
                "class"=>TProductes::class,
                "choice_label"=>"nomProd",
                "label"=>"Producte",
                "required"=>false,
                "attr" => [
                    "class" => "selectorProducte"
                ]
            ])
            ->add('descripprodProforma', TextType::class, [
                "label"=>"Impresió",
                "required"=>false
            ])
            ->add('numunitProforma', null, ["label"=>"Unitats","required"=>false])
            ->add('preuunitProforma', null,["label"=>"Preu","required"=>false])
            ->add('preuProforma', null,["label"=>"Subtotal","required"=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaAux::class,
        ]);
    }
}
