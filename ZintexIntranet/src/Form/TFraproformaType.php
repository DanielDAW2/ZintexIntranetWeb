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
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvents;

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
                "label"=>"Client",
                "required"=>false
            ])
            ->add('personaFraprof', TextType::class, [
                "label"=>"Persona",
                "required"=>false
            ])
            ->add('dataFraprof', DateType::class,[
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label"=>"Fecha Proforma"])
            ->add('numFraprof', TextType::class, [
                "label"=>"Proforma",
                "required"=>false,
                "attr"=>["readonly"=>true]
                ])
            ->add('nref', TextType::class,[
                
                "required"=>false
            ])
            ->add('sref', TextType::class, [
                
                "required"=>false
            ])
            ->add('baseImp', NumberType::class,[
                
                "required"=>false
            ])
            ->add('iva', NumberType::class,[
                
                "required"=>false
            ])
            ->add('req', NumberType::class,[
                
                "required"=>false
            ])
            ->add('ivaVar', NumberType::class,[
                
                "required"=>false
            ])
            ->add('reqVar', NumberType::class,[
                
                "required"=>false
            ])
            ->add('totalFra', NumberType::class,[
                
                "required"=>false
            ])
            ->add('importPendent', NumberType::class,[
                
                "required"=>false
            ])
            ->add('importPagat', NumberType::class,[
                
                "required"=>false
            ])
            ->add('metodePag', EntityType::class, [
                "class"=>TMetodePag::class,
                "choice_label" => "metode",
                "required"=>false
            ])
            ->add('metpagAux')
            ->add('observFraprof', TextareaType::class, [
                "required"=>false,
                "attr" => [
                    "cols"=> 12
                ]
            ])
            ->add('numAutor', EntityType::class, [
                "class"=>TAutorsPresup::class,
                "choice_label"=>"descripAutpresup",
                "required"=>false
            ])
            ->add('tFraproformaAuxes', CollectionType::class, [
                "entry_type" => TFraproformaAuxType::class,
                "allow_add" => true,
                'allow_delete' => true,
                'by_reference' => false,
                "required"=>false
            ])
            ->add('tFraproformaVtos', CollectionType::class, [
                "entry_type" => TFraproformaVtoType::class,
                "allow_add" => true,
                'allow_delete' => true,
                "required"=>false
            ])
            ->add('tFraproformaPlazos', CollectionType::class, [
                "entry_type" => TFraproformaPlazosType::class,
                "allow_add" => true,
                'allow_delete' => true,
                "required"=>false
            ])
        ;

        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
    }
    public function onPreSubmit(PreSubmitEvent  $event)
        {
            $data = $event->getData();
            $data['tFraproformaAuxes'] = array_values($data['tFraproformaAuxes']);
            $data['tFraproformaVtos'] = array_values($data['tFraproformaVtos']);
            $event->setData($data);
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproforma::class,
        ]);
    }
}
