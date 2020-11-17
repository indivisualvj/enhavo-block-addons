<?php

namespace App\Factory;

use App\Entity\DummyBlock;
use Enhavo\Bundle\BlockBundle\Factory\AbstractBlockFactory;
use Enhavo\Bundle\BlockBundle\Model\BlockInterface;

class DummyListBlockFactory extends AbstractBlockFactory
{
    /**
     * @param DummyBlock|BlockInterface $original
     * @return DummyBlock|BlockInterface|void
     */
    public function duplicate(BlockInterface $original)
    {
        $copy = parent::duplicate($original);

        // todo: copy items

        return $copy;
    }

}
