<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        $html = '<ul>';
        foreach ($this->pokemons as $pokemon) {
            $html .= '<li><img src="' . $pokemon->imageUrl() . '"></li>';
        }
        $html .= '</ul>';

        return $html;
    }
}
