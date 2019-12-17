<?php

namespace App\Form;

use App\Entity\TClients;
use App\Entity\TTractaments;
use App\Entity\TPaisos;
use App\Entity\TComercials;
use App\Entity\TInstrumentPag;
use App\Entity\TMetodePag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TClientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marcaCli')
            ->add('nifCli')
            ->add('client')
            ->add('clientCom')
            ->add('tractCli', EntityType::class, [
                "class"=>TTractaments::class,
                "choice_label"=>"tractament"
            ])
            ->add('nomfraCli')
            ->add('cognomfraCli')
            ->add('carrecfraCli')
            ->add('dirfraCli')
            ->add('codpfraCli')
            ->add('pobfraCli')
            ->add('paisfraCli', EntityType::class,[
                "class"=>TPaisos::class,
                "choice_label"=>"pais"
            ])
            ->add('telfraCli')
            ->add('faxfraCli')
            ->add('mobfraCli')
            ->add('emailCli')
            ->add('empentCli')
            ->add('tractentCli', EntityType::class, [
                "class"=>TTractaments::class,
                "choice_label"=>"tractament"
            ])
            ->add('persentCli')
            ->add('direntCli')
            ->add('codpentCli')
            ->add('pobentCli')
            ->add('paisentCli', EntityType::class, [
                "class"=>TPaisos::class,
                "choice_label"=>"pais"
            ])
            ->add('telentCli')
            ->add('faxentCli')
            ->add('webCli')
            ->add('metPag', EntityType::class, [
                "class"=>TMetodePag::class,
                "choice_label"=>"metode"
            ])
            ->add('instPag', EntityType::class, [
                "class"=>TInstrumentPag::class,
                "choice_label"=>"nomInstPag"
            ])
            ->add('diaPag')
            ->add('problemaPag')
            ->add('titularccCli')
            ->add('ccCli')
            ->add('persfinCli')
            ->add('carrecfinCli')
            ->add('telfinCli')
            ->add('emailfinCli')
            ->add('tipusIva')
            ->add('tipusReq')
            ->add('observacionsCli')
            ->add('observacionsfinCli')
            ->add('motiuContacte')
            ->add('mailing')
            ->add('cat')
            ->add('clientCycred')
            ->add('classificatCycred')
            ->add('creditCycred')
            ->add('statusCycred')
            ->add('limitCycred')
            ->add('baixaCycred')
            ->add('numUltimPresup')
            ->add('dataUltimPresup')
            ->add('numUltimFraproforma')
            ->add('dataUltimFraproforma')
            ->add('numUltimFactura')
            ->add('dataUltimFactura')
            ->add('okbancDomiciliacio')
            ->add('mailingNadal')
            ->add('especial')
            ->add('dataAlta')
            ->add('horaAlta')
            ->add('baixa')
            ->add('expressAfegit')
            ->add('expressMai')
            ->add('majorista')
            ->add('royalty')
            ->add('activitat2')
            ->add('numAgentComercial', EntityType::class,
            [
                "class"=>TComercials::class,
                "choice_label"=>"nomComercial"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TClients::class,
        ]);
    }
}
