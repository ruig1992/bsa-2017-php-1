<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    private $emojis = [
        "\u{1F600}",
        "\u{1F603}",
        "\u{1F604}",
        "\u{1F601}",
        "\u{1F606}",
        "\u{1F605}",
        "\u{1F602}"
    ];

    public function generate()
    {
        for ($i = 0, $n = count($this->emojis); $i < $n; $i++) {
            yield $this->emojis[$i];
        }
    }
}
