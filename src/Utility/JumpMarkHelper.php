<?php


namespace App\Utility;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class JumpMarkHelper
{
    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('jumpMark', TextType::class, [
                'label' => 'Sprungmarke'
            ])
        ;
    }

    public static function copy($original, $copy)
    {
        $copy->setJumpMark($original->getJumpMark());
    }
}
