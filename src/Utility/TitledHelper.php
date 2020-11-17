<?php


namespace App\Utility;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TitledHelper
{
    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('overline', TextType::class, [

            ])
            ->add('headline', TextType::class, [

            ])
            ->add('subheadline', TextType::class, [

            ])
        ;
    }
}
