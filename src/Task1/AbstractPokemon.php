<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    protected const NAME = 'unnamed';
    protected const BATTLE_CRY = 'unknown';

    /**
     * @var string
     */
    protected $image;

    /**
     * @param string $image
     */
    public function __construct(string $image = null)
    {
        $this->setImage($image);
    }

    /**
     * Get answer from picked Pokemon
     *
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->getName() . ': ' . $this->battleCry();
    }

    public function battleCry(): string
    {
        return static::BATTLE_CRY;
    }

    public function imageUrl(): string
    {
        return $this->image;
    }

    public function getName(): string
    {
        return static::NAME;
    }

    public function setImage(string $image = null): self
    {
        if (null === $image) {
            return $this;
        }

        $image = trim($image);
        if (filter_var($image, FILTER_VALIDATE_URL) === false) {
            return $this;
        }

        $this->image = $image;
        return $this;
    }
}
