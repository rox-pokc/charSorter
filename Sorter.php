<?php

namespace CharSorter;

class Sorter
{
    public static function sortText($text)
    {
        $text = self::modifySpecificChars($text);
        $words = explode(' ', $text);
        $sortedWords = array();
        foreach ($words as $word) {
            array_push($sortedWords, self::sortWord($word));
        }
        return implode(' ', $sortedWords);
    }

    private static function modifySpecificChars($text)
    {
        return str_replace('ё', 'е', str_replace('Ё', 'Е', $text));
    }

    private static function sortWord($word)
    {
        $letters = mb_str_split($word);
        sort($letters);
        return implode('', $letters);
    }
}