<?php


namespace App\Utility;


use Enhavo\Bundle\FormBundle\Form\Type\WysiwygType;
use Symfony\Component\Form\FormBuilderInterface;

class TextHelper
{

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('textContent', WysiwygType::class, [
                'label' => 'Text'
            ])
        ;
    }

    public static function copy($original, $copy)
    {
        $copy->setTextContent($original->getTextContent());
    }
}
