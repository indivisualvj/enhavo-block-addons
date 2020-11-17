<?php

namespace App\Entity;

use App\Entity\Traits\JumpMarkTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Enhavo\Bundle\BlockBundle\Entity\AbstractBlock;

class DummyListBlock extends AbstractBlock
{

    /** @var Collection<DummyListBlockItem> */
    private $items;

    /**
     * HeaderBlock constructor.
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param DummyListBlockItem $item
     */
    public function addItem(DummyListBlockItem $item)
    {
        $this->items->add($item);
        $item->setParent($this);
    }

    /**
     * @param DummyListBlockItem $item
     */
    public function removeItem(DummyListBlockItem $item)
    {
        $this->items->removeElement($item);
        $item->setParent(null);
    }

}
