<?php


namespace App\Utility;


use Enhavo\Bundle\FormBundle\Form\Type\PositionType;
use Enhavo\Bundle\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\FormBuilderInterface;

class PositionHelper
{

    public static function addFormFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('position', PositionType::class)
        ;
    }

    public static function copy($original, $copy)
    {
        $copy->setPosition($original->getPosition());
    }
}
