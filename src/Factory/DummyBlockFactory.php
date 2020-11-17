<?php

namespace App\Factory;

use App\Entity\DummyBlock;
use App\Utility\ImageHelper;
use App\Utility\JumpMarkHelper;
use App\Utility\TextHelper;
use App\Utility\TitledHelper;
use Enhavo\Bundle\BlockBundle\Factory\AbstractBlockFactory;
use Enhavo\Bundle\BlockBundle\Model\BlockInterface;

class DummyBlockFactory extends AbstractBlockFactory
{
    /**
     * @param DummyBlock|BlockInterface $original
     * @return DummyBlock|BlockInterface|void
     */
    public function duplicate(BlockInterface $original)
    {
        $copy = parent::duplicate($original);

        JumpMarkHelper::copy($original, $copy);
        TitledHelper::copy($original, $copy);
        TextHelper::copy($original, $copy);
        ImageHelper::copy($original, $copy, $this->getFileFactory());

        return $copy;
    }

}
