<?php


namespace App\Entity\Traits;


trait LayoutTrait
{

    /** @var string|null */
    protected $layout;

    /**
     * @return string|null
     */
    public function getLayout(): ?string
    {
        return $this->layout;
    }

    /**
     * @param string|null $layout
     */
    public function setLayout(?string $layout): void
    {
        $this->layout = $layout;
    }


}
