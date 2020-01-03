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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TClientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nifCli', TextType::class, [
                "label"=>"DNI/NIF"
            ])
            ->add('client', TextType::class, [
                "label"=>"Razón Social"
            ])
            ->add('clientCom', TextType::class, [
                "label"=>"Nombre Comercial"
            ])
            ->add('tractCli', EntityType::class, [
                "class"=>TTractaments::class,
                "choice_label"=>"tractament",
                "label"=>"Tratamiento"
            ])
            ->add('nomfraCli', TextType::class, [
                "label"=>"Nombre Facturación"
            ])
            ->add('cognomfraCli', TextType::class, [
                "label"=>"Apellido Facturacion"
            ])
            ->add('carrecfraCli', TextType::class, [
                "label"=>"Calle facturación"
            ])
            ->add('dirfraCli', TextType::class, [
                "label"=>"Direccion facturacion"
            ])
            ->add('codpfraCli', TextType::class, [
                "label"=>"Código Postal Facturacion"
            ])
            ->add('pobfraCli', TextType::class, [
                "label"=>"Poblacion facturación"
            ])
            ->add('paisfraCli', EntityType::class,[
                "class"=>TPaisos::class,
                "choice_label"=>"pais",
                "label"=>"Pais facturacion"
            ])
            ->add('telfraCli', TextType::class, [
                "label"=>"Teléfono facturacion"
            ])
            ->add('faxfraCli', TextType::class, [
                "label"=>"Fax Facturacion"
            ])
            ->add('mobfraCli', TextType::class, [
                "label"=>"Movil Facturacion"
            ])
            ->add('emailCli', TextType::class, [
                "label"=>"Email"
            ])
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
                "choice_label"=>"metode",
                "label"=>"Forma Pago"
            ])
            ->add('instPag', EntityType::class, [
                "class"=>TInstrumentPag::class,
                "choice_label"=>"nomInstPag",
                "label"=>"Instrumento de Pago"
            ])
            ->add('diaPag')
            ->add('problemaPag', CheckboxType::class, [
                "label"=>"Problema al pagar"
            ])
            ->add('titularccCli', TextType::class, [
                "label"=>"Titular Cuenta Corriente"
            ])
            ->add('ccCli', TextType::class, [
                "label"=>"Cuenta Corriente"
            ])
            ->add('persfinCli')
            ->add('carrecfinCli')
            ->add('telfinCli')
            ->add('emailfinCli')
            ->add('tipusIva', NumberType::class, [
                "label"=>"Tipo de Iva"
            ])
            ->add('tipusReq')
            ->add('observacionsCli', TextType::class, [
                "label"=>"Obvservaciones Cliente"
            ])
            ->add('observacionsfinCli')
            ->add('motiuContacte', TextType::class, [
                "label"=>"Motivo Contacto"
            ])
            ->add('mailing')
            ->add('cat')
            ->add('clientCycred')
            ->add('classificatCycred')
            ->add('creditCycred')
            ->add('statusCycred')
            ->add('limitCycred')
            ->add('mailingNadal')
            ->add('especial')
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
