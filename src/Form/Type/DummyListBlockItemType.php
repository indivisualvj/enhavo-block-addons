<?php

namespace App\Form\Type;

use App\Entity\DummyListBlockItem;
use App\Utility\PositionHelper;
use App\Utility\TitledHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DummyListBlockItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        TitledHelper::addFormFields($builder);
        PositionHelper::addFormFields($builder);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => DummyListBlockItem::class
        ));
    }
}
