<?php


namespace App\Entity\Traits;


use Enhavo\Bundle\MediaBundle\Model\FileInterface;

trait VideoTrait
{
    /** @var FileInterface|null */
    private $video;

    /**
     * @return FileInterface|null
     */
    public function getVideo(): ?FileInterface
    {
        return $this->video;
    }

    /**
     * @param FileInterface|null $video
     */
    public function setVideo(?FileInterface $video): void
    {
        $this->video = $video;
    }

}
