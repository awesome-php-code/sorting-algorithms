<?php

namespace AwesomePhpCode\SortingAlgorithms\Tests;

use AwesomePhpCode\SortingAlgorithms\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    /** @test */
    public function itOrdersACollectionInReverseOrder()
    {
        $collection = [30, 20, 10, 5, 0];

        $ordered = BubbleSort::sort($collection);

        $this->assertSame([0, 5, 10, 20, 30], $ordered);
    }

    /** @test */
    public function itOrdersACollectionInTheFirstIteration()
    {
        $collection = [0, 5, 10, 30, 20];

        $ordered = BubbleSort::sort($collection);

        $this->assertSame([0, 5, 10, 20, 30], $ordered);
    }

    /** @test */
    public function itOrdersACollectionInTheSecondIteration()
    {
        $collection = [10, 5, 0, 30, 20];

        $ordered = BubbleSort::sort($collection);

        $this->assertSame([0, 5, 10, 20, 30], $ordered);
    }

    /** @test */
    public function itNotOrdersAnythingWhenCollectionIsOrdered()
    {
        $collection = [0, 5, 10, 20, 30];

        $ordered = BubbleSort::sort($collection);

        $this->assertSame([0, 5, 10, 20, 30], $ordered);
    }
}
