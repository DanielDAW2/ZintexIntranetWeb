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

class  TFraproformaPlazosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codprodFraprofPlazo', EntityType::class, [
                "class" => TProductes::class,
                "choice_label" => "nomProd",
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orWhere('u.idProd = 241')
                        ->orWhere('u.idProd = 240')
                        ->orWhere('u.idProd = 239')
                        ->orWhere('u.idProd = 296');
                },
                "expanded" => false,
                "multiple" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFraproformaPlazos::class,
        ]);
    }
}
