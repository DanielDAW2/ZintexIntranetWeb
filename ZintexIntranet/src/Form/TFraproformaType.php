<?php

namespace App\Form;

use App\Entity\TFraproforma;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientFraprof')
            ->add('personaFraprof')
            ->add('dataFraprof')
            ->add('numFraprof')
            ->add('refPresup')
            ->add('refAlbara')
            ->add('refFactura')
            ->add('nref')
            ->add('sref')
            ->add('valorada')
            ->add('baseImp')
            ->add('iva')
            ->add('req')
            ->add('ivaVar')
            ->add('reqVar')
            ->add('totalFra')
            ->add('importPendent')
            ->add('importPagat')
            ->add('metodePag')
            ->add('metpagAux')
            ->add('observFraprof')
            ->add('seguiment')
            ->add('numAutor')
            ->add('numAutorProforma')
            ->add('dataGravacio')
            ->add('horaGravacio')
            ->add('acceptada')
            ->add('dataAcceptacio')
            ->add('horaAcceptacio')
            ->add('ultimPagament')
            ->add('facturar')
            ->add('dataProduccio')
            ->add('horaProduccio')
            ->add('produccio')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproforma::class,
        ]);
    }
}
