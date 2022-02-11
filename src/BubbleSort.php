<?php

namespace AwesomePhpCode\SortingAlgorithms;

class BubbleSort
{
    public static function sort(array $collection): array
    {
        $size = count($collection);

        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size - 1 - $i; $j++) {
                $item = $collection[$j];
                $nextItem = $collection[$j + 1];

                if ($nextItem < $item) {
                    $collection[$j + 1] = $item;
                    $collection[$j] = $nextItem;
                }
            }
        }

        return $collection;
    }
}
