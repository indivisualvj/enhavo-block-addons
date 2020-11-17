<?php


namespace App\Entity\Traits;


trait LinkTrait
{

    /** @var string|null */
    protected $link;

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     */
    public function setLink(?string $link): void
    {
        $this->link = $link;
    }


}
