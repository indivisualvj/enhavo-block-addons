<?php


namespace App\Utility;

use Enhavo\Bundle\MediaBundle\Entity\File;
use Enhavo\Bundle\MediaBundle\Factory\FileFactory;
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

    public static function copy($original, $copy, FileFactory $fileFactory)
    {
        if ($original->getImage()) {
            /** @var File $newPicture */
            $newPicture = $fileFactory->duplicate($original->getPicture());
            $copy->setImage($newPicture);
        }
    }
}
