<?php

namespace App\Form;

use App\Entity\TFactura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Data_factura')
            ->add('Data_Vto_Factura')
            ->add('Num_Factura')
            ->add('NRef')
            ->add('SRef')
            ->add('Ref_Proforma')
            ->add('Ref_Albara')
            ->add('Ref_Presup')
            ->add('Base_Imp')
            ->add('IVA_VAR')
            ->add('IVA')
            ->add('REQ_VAR')
            ->add('REQ')
            ->add('Total_Fra')
            ->add('Import_Pendent')
            ->add('Import_Pagat')
            ->add('MetPag_Aux')
            ->add('Ultim_Pagament')
            ->add('Client_Factura')
            ->add('Metode_Pag')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFactura::class,
        ]);
    }
}
