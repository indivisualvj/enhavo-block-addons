<?php

namespace App\Factory;

use App\Entity\DummyListBlock;
use Enhavo\Bundle\BlockBundle\Factory\AbstractBlockFactory;
use Enhavo\Bundle\BlockBundle\Model\BlockInterface;

class DummyListBlockFactory extends AbstractBlockFactory
{
    /**
     * @param DummyListBlock|BlockInterface $original
     * @return DummyListBlock|BlockInterface|void
     */
    public function duplicate(BlockInterface $original)
    {
        $copy = parent::duplicate($original);

        // todo: copy items

        return $copy;
    }

}
