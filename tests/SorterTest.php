<?php

namespace CharSorter\Tests;

use PHPUnit\Framework\TestCase;
use CharSorter\Sorter;

require ('Sorter.php');

class SorterTest extends TestCase
{
    /**
     * @dataProvider textProvider
     */
    public function testSorting($text, $expectedText)
    {
        $this->assertSame($expectedText, Sorter::sortText($text));
    }

    public function textProvider()
    {
        return [
            ['', ''],
            ['a', 'a'],
            ['а', 'а'],
            ['α', 'α'],
            ['1', '1'],
            ['!', '!'],
            ['zyxwvutsrqponmlkjihgfedcba', 'abcdefghijklmnopqrstuvwxyz'],
            ['ZYXWVUTSRQPONMLKJIHGFEDCBA', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'],
            ['яюэьыъщшчцхфутсрпонмлкйизжёедгвба', 'абвгдеежзийклмнопрстуфхцчшщъыьэюя'],
            ['ЯЮЭЬЫЪЩШЧЦХФУТСРПОНМЛКЙИЗЖЁЕДГВБА', 'АБВГДЕЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ'],
            ['ωψγβα ΩΨΔ', 'αβγψω ΔΨΩ'],
            ['a b c d e f g h i j k l m n o p q r s t u v w x y z', 'a b c d e f g h i j k l m n o p q r s t u v w x y z'],
            ['test example qwerty', 'estt aeelmpx eqrtwy'],
        ];
    }
}