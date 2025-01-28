<?php

namespace Akufikri\Laminify\Helpers;

class Minifier
{
    public static function minifyCss(string $content): string
    {
        return preg_replace(['!/\\*.*?\\*/!s', '/\\s+/'], ['', ' '], $content);
    }

    public static function minifyJs(string $content): string
    {
        return preg_replace(['!//.*!', '/\\s+/'], ['', ' '], $content);
    }
}
