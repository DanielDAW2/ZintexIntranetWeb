<?php

namespace App\Form;

use App\Entity\TClients;
use App\Entity\TFactura;
use App\Entity\TMetodePag;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PreSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Data_factura', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label" => "Fecha Fatura"
            ])
            ->add('Data_Vto_Factura', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label" => "Vencimiento Fatura"
            ])
            ->add('NRef', TextType::class, [

                "required" => false
            ])
            ->add('SRef', TextType::class, [

                "required" => false
            ])
            ->add('Base_Imp', NumberType::class, [

                "required" => false
            ])
            ->add('IVA_VAR', NumberType::class, [

                "required" => false
            ])
            ->add('IVA', NumberType::class, [

                "required" => false
            ])
            ->add('REQ_VAR', NumberType::class, [

                "required" => false
            ])
            ->add('REQ', NumberType::class, [

                "required" => false
            ])
            ->add('Total_Fra', NumberType::class, [

                "required" => false
            ])
            ->add('Import_Pendent', NumberType::class, [

                "required" => false
            ])
            ->add('Import_Pagat', NumberType::class, [

                "required" => false
            ])
            ->add('MetPag_Aux')
            ->add('Client_Factura', EntityType::class, [
                "class" => TClients::class,
                "choice_label" => "client",

            ])
            ->add('Metode_Pag', EntityType::class, [
                "class" => TMetodePag::class,
                "choice_label" => "metode"
            ])
            ->add('tFacturaAuxes', CollectionType::class, [
                "entry_type" => TFacturaAuxType::class,
                "allow_add" => true,
                'allow_delete' => true,
                'by_reference' => false,
                "required" => false
            ]);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
    }
    public function onPreSubmit(PreSubmitEvent  $event)
    {
        $data = $event->getData();
        $data['tFacturaAuxes'] = array_values($data['tFacturaAuxes']);
        $event->setData($data);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFactura::class,
        ]);
    }
}
