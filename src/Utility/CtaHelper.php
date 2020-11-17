<?php


namespace App\Utility;


use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CtaHelper
{
    const TARGET_SELF = '_self';
    const TARGET_BLANK = '_blank';
    const TARGETS = [
        'self' => self::TARGET_SELF,
        'blank' => self::TARGET_BLANK
    ];

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('ctaTitle', TextType::class, [
                'label' => 'CTA-Titel'
            ])
            ->add('ctaLink', TextType::class, [
                'label' => 'CTA-Link'
            ])
            ->add('ctaTarget', ChoiceType::class, [
                'label' => 'CTA-Ziel',
                'choices' => self::TARGETS
            ])
        ;
    }
}
