<?php

declare(strict_types=1);

namespace Exercises\Pyramid;

/**
 * Print a pyramid.
 *
 * @method static void print(int $rows)
 * @example Pyramid::print(3)  -> '  #  '
 *                                ' ### '
 *                                '#####'
 */
final class Pyramid
{

    public static function print(int $rows):void{

        for ($i = 0; $i < $rows; $i++)
        {
            for($j = 0; $j <= ($i!=0)?($j < $i+($i+1)):($j <= $i); $j++ )
            {
                echo "#";
            }
                echo ' ';
        }
    }
}



