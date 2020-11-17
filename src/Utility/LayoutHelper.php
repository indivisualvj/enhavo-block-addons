<?php


namespace App\Utility;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class LayoutHelper
{
    const LAYOUT_IMAGE_TEXT = 'image-text';
    const LAYOUT_TEXT_IMAGE = 'text-image';
    const LAYOUTS = [
        'Bild-Text' => self::LAYOUT_IMAGE_TEXT,
        'Text-Bild' => self::LAYOUT_TEXT_IMAGE,
    ];

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('layout', ChoiceType::class, [
                'choices' => self::LAYOUTS
            ])
        ;
    }

    public static function copy($original, $copy)
    {
        $copy->setLayout($original->getLayout());
    }
}
