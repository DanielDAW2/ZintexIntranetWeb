<?php

namespace App\Form;

use App\Entity\TAlbara;
use App\Entity\TClients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TAlbaraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripClientAlbara')
            ->add('nomClientAlbara')
            ->add('direccioClientAlbara')
            ->add('numAlbara', TextType::class, [
                "label" => "Albarán",
                "required" => false,
                "attr" => ["readonly" => true]
            ])
            ->add('dataAlbara', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label" => "Fecha Albara"
            ])
            ->add('dataSortidaAlbara', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                "label" => "Fecha Salida Albarán"
            ])
            ->add('nrefAlbara')
            ->add('srefAlbara')
            ->add('facturableAlbara', CheckboxType::class, [])
            ->add(
                'clientAlbara',
                EntityType::class,
                [
                    "class" => TClients::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->select()
                            ->setMaxResults(5);
                    },
                    "choice_label" => "client",
                    "label" => "Client",
                    "required" => false
                ]
            )
            ->add('tAlbaraAuxes', CollectionType::class, [
                "entry_type" => TAlbaraAuxType::class,
                "allow_add" => true,
                "allow_delete" => true,
                "by_reference" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAlbara::class,
        ]);
    }
}
