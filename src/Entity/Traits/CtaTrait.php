<?php


namespace App\Entity\Traits;


trait CtaTrait
{
    /** @var string|null */
    private $ctaTitle;

    /** @var string|null */
    private $ctaLink;

    /** @var string */
    private $ctaTarget = '_self';

    /**
     * @return string|null
     */
    public function getCtaTitle(): ?string
    {
        return $this->ctaTitle;
    }

    /**
     * @param string|null $ctaTitle
     */
    public function setCtaTitle(?string $ctaTitle): void
    {
        $this->ctaTitle = $ctaTitle;
    }

    /**
     * @return string|null
     */
    public function getCtaLink(): ?string
    {
        return $this->ctaLink;
    }

    /**
     * @param string|null $ctaLink
     */
    public function setCtaLink(?string $ctaLink): void
    {
        $this->ctaLink = $ctaLink;
    }

    /**
     * @return string
     */
    public function getCtaTarget(): string
    {
        return $this->ctaTarget;
    }

    /**
     * @param string $ctaTarget
     */
    public function setCtaTarget(string $ctaTarget): void
    {
        $this->ctaTarget = $ctaTarget;
    }




}
