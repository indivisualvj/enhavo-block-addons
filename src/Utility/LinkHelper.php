<?php


namespace App\Utility;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class LinkHelper
{

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('link', TextType::class, [
                'label' => 'Link'
            ])
        ;
    }

    public static function copy($original, $copy)
    {
        $copy->setLink($original->getLink());
    }
}
