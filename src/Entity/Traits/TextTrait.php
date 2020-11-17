<?php


namespace App\Entity\Traits;


trait TextTrait
{
    /** @var string|null */
    private $textContent;

    /**
     * @return string|null
     */
    public function getTextContent(): ?string
    {
        return $this->textContent;
    }

    /**
     * @param string|null $textContent
     */
    public function setTextContent(?string $textContent): void
    {
        $this->textContent = $textContent;
    }


}
