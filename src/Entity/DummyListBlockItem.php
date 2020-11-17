<?php

namespace App\Entity;

use App\Entity\Traits\CtaTrait;
use App\Entity\Traits\PositionTrait;
use App\Entity\Traits\TitledTrait;
use Sylius\Component\Resource\Model\ResourceInterface;

class DummyListBlockItem implements ResourceInterface
{
    use PositionTrait;
    use TitledTrait;

    private $id;

    /** @var DummyListBlock|null */
    private $parent;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DummyListBlock|null
     */
    public function getParent(): ?DummyListBlock
    {
        return $this->parent;
    }

    /**
     * @param DummyListBlock|null $parent
     */
    public function setParent(?DummyListBlock $parent): void
    {
        $this->parent = $parent;
    }



}
