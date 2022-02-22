<?php

namespace AwesomePhpCode\SortingAlgorithms;

class BubbleSort
{
    public static function sort(array $collection): array
    {
        $n = count($collection);
        for ($i = 1; $i <= $n - 1; $i++) {
            $swapped = false;
            for ($j = 1; $j <= $n - $i; $j++) {
                $item = $collection[$j - 1];
                $nextItem = $collection[$j];

                if ($item > $nextItem) {
                    $swapped = true;
                    $collection[$j - 1] = $nextItem;
                    $collection[$j] = $item;
                }
            }

            if (!$swapped) {
                break;
            }
        }

        return $collection;
    }
}
