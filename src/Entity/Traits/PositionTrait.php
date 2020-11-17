<?php


namespace App\Entity\Traits;


trait PositionTrait
{

    /** @var int|null */
    private $position;

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     */
    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }


}
