<?php

namespace App\Form;

use App\Entity\TClients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TClientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marcaCli')
            ->add('codiCli')
            ->add('codiCliDream')
            ->add('nifCli')
            ->add('client')
            ->add('clientCom')
            ->add('tractCli')
            ->add('nomfraCli')
            ->add('cognomfraCli')
            ->add('carrecfraCli')
            ->add('dirfraCli')
            ->add('codpfraCli')
            ->add('pobfraCli')
            ->add('paisfraCli')
            ->add('telfraCli')
            ->add('faxfraCli')
            ->add('mobfraCli')
            ->add('emailCli')
            ->add('empentCli')
            ->add('tractentCli')
            ->add('persentCli')
            ->add('direntCli')
            ->add('codpentCli')
            ->add('pobentCli')
            ->add('paisentCli')
            ->add('telentCli')
            ->add('faxentCli')
            ->add('webCli')
            ->add('metPag')
            ->add('instPag')
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
            ->add('numAgentComercial')
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TClients::class,
        ]);
    }
}
