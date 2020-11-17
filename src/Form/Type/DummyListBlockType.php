<?php

namespace App\Form\Type;

use App\Entity\DummyListBlock;
use Enhavo\Bundle\FormBundle\Form\Type\ListType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DummyListBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('items', ListType::class, [
            'entry_type' => DummyListBlockItemType::class,
            'sortable' => true
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => DummyListBlock::class
        ));
    }
}
