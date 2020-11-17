<?php

namespace App\Form\Type;

use App\Entity\DummyBlock;
use App\Utility\CtaHelper;
use App\Utility\ImageHelper;
use App\Utility\JumpMarkHelper;
use App\Utility\TextHelper;
use App\Utility\TitledHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DummyBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        CtaHelper::addFormFields($builder);
        JumpMarkHelper::addFormFields($builder);
        TitledHelper::addFormFields($builder);
        TextHelper::addFormFields($builder);
        ImageHelper::addFormFields($builder);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => DummyBlock::class
        ));
    }
}
