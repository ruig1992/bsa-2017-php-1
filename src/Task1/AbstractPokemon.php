<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    protected const NAME = 'unnamed';
    protected const BATTLE_CRY = 'unknown';

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
    { /* later... */ }

    public function getName(): string
    {
        return static::NAME;
    }
}
