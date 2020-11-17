<?php

namespace App\Entity\Traits;

trait JumpMarkTrait
{
    /** @var string|null */
    private $jumpMark;

    /**
     * @return string|null
     */
    public function getJumpMark(): ?string
    {
        return $this->jumpMark;
    }

    /**
     * @param string|null $jumpMark
     */
    public function setJumpMark(?string $jumpMark): void
    {
        $this->jumpMark = $jumpMark;
    }


}
