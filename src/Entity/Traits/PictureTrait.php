<?php


namespace App\Entity\Traits;


use Enhavo\Bundle\MediaBundle\Model\FileInterface;

trait PictureTrait
{
    /** @var FileInterface|null */
    private $picture;

    /**
     * @return FileInterface|null
     */
    public function getPicture(): ?FileInterface
    {
        return $this->picture;
    }

    /**
     * @param FileInterface|null $picture
     */
    public function setPicture(?FileInterface $picture): void
    {
        $this->picture = $picture;
    }

}
