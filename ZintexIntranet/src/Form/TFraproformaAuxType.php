<?php

namespace App\Form;

use App\Entity\TFraproformaAux;
use App\Entity\TProductes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
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
                "choice_label"=>"nomProd"
            ])
            ->add('descripprodProforma')
            ->add('numunitProforma')
            ->add('preuunitProforma')
            ->add('preuProforma')
            ->add('baixa')
            ->add('marcat')
            ->add('prodPrincipal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaAux::class,
        ]);
    }
}
