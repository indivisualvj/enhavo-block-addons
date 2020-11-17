<?php


namespace App\Utility;


use Enhavo\Bundle\FormBundle\Form\Type\WysiwygType;
use Symfony\Component\Form\FormBuilderInterface;

class TextHelper
{

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('text', WysiwygType::class, [
                'label' => 'Text'
            ])
        ;
    }
}
