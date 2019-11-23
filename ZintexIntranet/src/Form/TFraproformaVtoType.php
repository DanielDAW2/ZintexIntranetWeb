<?php

namespace App\Form;

use App\Entity\TFraproformaVto;
use Proxies\__CG__\App\Entity\TInstrumentPag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaVtoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('concepteVto', TextType::class, [
                "label"=>"Concepte"
            ])
            ->add('instpagAux', TextType::class, [
                "label"=>"Descripcio"
            ])
            ->add('importVto', NumberType::class, [
                "label"=>"Import Vto"
            ])
            ->add('datapagVto', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label"=>"Fecha Vencimiento"]
            )
            ->add('importpagVto', NumberType::class, [
                "label"=>"Import Pagat"
            ])
            ->add('okbancVto', DateType::class,[
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label"=>"Fecha OK Banco"])
            ->add('instpag', EntityType::class, [
                "class"=>TInstrumentPag::class,
                "choice_label"=>"nomInstPag",
                "label"=>"Forma de Pago"
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
