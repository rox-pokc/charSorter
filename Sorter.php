<?php

namespace CharSorter;

class Sorter
{
    public static function sortText($text)
    {
        $words = explode(' ', $text);
        foreach ($words as $word) {
            $word = self::sortWord($word);
        }
        return implode(' ', $words);
    }

    private static function sortWord($word)
    {
        $letters = mb_str_split($word);
        sort($letters);
        return implode('', $letters);
    }
}