<?php

namespace App\Form;

use App\Entity\TFraproformaVto;
use Proxies\__CG__\App\Entity\TInstrumentPag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaVtoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('concepteVto')
            ->add('instpagAux')
            ->add('importVto')
            ->add('datapagVto', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label"=>"Fecha Vencimiento"]
            )
            ->add('importpagVto')
            ->add('okbancVto')
            ->add('instpag', EntityType::class, [
                "class"=>TInstrumentPag::class,
                "choice_label"=>"nomInstPag"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaVto::class,
        ]);
    }
}
