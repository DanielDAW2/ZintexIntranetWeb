<?php

namespace App\Form;

use App\Entity\TAutorsPresup;
use App\Entity\TFraproforma;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\TClients;
use App\Entity\TMetodePag;
use App\Form\TFraproformaAuxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TFraproformaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientFraprof',EntityType::class,[
                "class"=>TClients::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->setMaxResults(5);
                },
                "choice_label"=>"client",
                "label"=>"Client"
            ])
            ->add('personaFraprof', TextType::class, [
                "label"=>"Persona"
            ])
            ->add('dataFraprof', DateType::class,[
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label"=>"Fecha Proforma"])
            ->add('numFraprof', TextType::class, [
                "label"=>"Proforma",
                "attr"=>["readonly"=>true]
                ])
            ->add('nref')
            ->add('sref')
            ->add('baseImp')
            ->add('iva')
            ->add('req')
            ->add('ivaVar')
            ->add('reqVar')
            ->add('totalFra')
            ->add('importPendent')
            ->add('importPagat')
            ->add('metodePag', EntityType::class, [
                "class"=>TMetodePag::class,
                "choice_label" => "metode"
            ])
            ->add('metpagAux')
            ->add('observFraprof', TextareaType::class, [
                "attr" => [
                    "cols"=> 12
                ]
            ])
            ->add('numAutor', EntityType::class, [
                "class"=>TAutorsPresup::class,
                "choice_label"=>"descripAutpresup"
            ])
            ->add('tFraproformaAuxes', CollectionType::class, [
                "entry_type" => TFraproformaAuxType::class,
                "allow_add" => true,
                'allow_delete' => true,
            ])
            ->add('tFraproformaVtos', CollectionType::class, [
                "entry_type" => TFraproformaVtoType::class,
                "allow_add" => true,
                'allow_delete' => true,
            ])
            ->add('tFraproformaPlazos', CollectionType::class, [
                "entry_type" => TFraproformaPlazosType::class,
                "allow_add" => true,
                'allow_delete' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproforma::class,
        ]);
    }
}
