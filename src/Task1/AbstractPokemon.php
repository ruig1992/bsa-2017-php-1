<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $battleCry = '';

    /**
     * @var string
     */
    protected $image = '';

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
        return $this->battleCry;
    }

    public function imageUrl(): string
    {
        return $this->image;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
