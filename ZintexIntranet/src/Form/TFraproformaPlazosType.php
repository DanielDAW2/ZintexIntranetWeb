<?php

namespace App\Form;

use App\Entity\TFraproformaPlazos;
use App\Entity\TProductes;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TFraproformaPlazosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
        ->add('descripprodFraprofPlazo', TextType::class, [
            "label"=>false
        ]);
=======
            ->add('codprodFraprofPlazo', EntityType::class, [
                "class"=> TProductes::class,
                "choice_label"=>"nomProd",
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orWhere('u.idProd = 241')
                        ->orWhere('u.idProd = 240')
                        ->orWhere('u.idProd = 239')
                        ->orWhere('u.idProd = 296');
                },
                "expanded"=>false,
                "multiple"=>false
            ]);
>>>>>>> a5b017be7f73a6ae525faf1eb99e6fec82008c3c
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaPlazos::class,
        ]);
    }
}
