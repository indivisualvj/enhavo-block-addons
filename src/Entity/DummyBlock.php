<?php


namespace App\Entity;


use App\Entity\Traits\CtaTrait;
use App\Entity\Traits\FileTrait;
use App\Entity\Traits\ImageTrait;
use App\Entity\Traits\JumpMarkTrait;
use App\Entity\Traits\LayoutTrait;
use App\Entity\Traits\PositionTrait;
use App\Entity\Traits\TextTrait;
use App\Entity\Traits\TitledTrait;
use App\Entity\Traits\VideoTrait;

class DummyBlock extends \Enhavo\Bundle\BlockBundle\Entity\AbstractBlock
{
    use CtaTrait;
    use FileTrait;
    use ImageTrait;
    use JumpMarkTrait;
    use LayoutTrait;
    use PositionTrait;
    use TextTrait;
    use TitledTrait;
    use VideoTrait;
}
