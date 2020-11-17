<?php


namespace App\Entity\Traits;


trait TitledTrait
{
    /** @var string|null */
    private $overline;
    /** @var string|null */
    private $headline;
    /** @var string|null */
    private $subheadline;

    /**
     * @return string|null
     */
    public function getOverline(): ?string
    {
        return $this->overline;
    }

    /**
     * @param string|null $overline
     */
    public function setOverline(?string $overline): void
    {
        $this->overline = $overline;
    }

    /**
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    /**
     * @param string|null $headline
     */
    public function setHeadline(?string $headline): void
    {
        $this->headline = $headline;
    }

    /**
     * @return string|null
     */
    public function getSubheadline(): ?string
    {
        return $this->subheadline;
    }

    /**
     * @param string|null $subheadline
     */
    public function setSubheadline(?string $subheadline): void
    {
        $this->subheadline = $subheadline;
    }


}
