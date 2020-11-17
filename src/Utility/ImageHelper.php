<?php


namespace App\Utility;


use Enhavo\Bundle\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageHelper
{

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('image', MediaType::class, [
                'label' => 'Bild',
                'multiple' => false,
            ])
        ;
    }
}
