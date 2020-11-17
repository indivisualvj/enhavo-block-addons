<?php


namespace App\Entity\Traits;


use Enhavo\Bundle\MediaBundle\Model\FileInterface;

trait FileTrait
{
    /** @var FileInterface|null */
    private $file;

    /**
     * @return FileInterface|null
     */
    public function getFile(): ?FileInterface
    {
        return $this->file;
    }

    /**
     * @param FileInterface|null $file
     */
    public function setFile(?FileInterface $file): void
    {
        $this->file = $file;
    }

}
