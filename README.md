# 📌 Sorting Algorithms in PHP

This repository shows you several sorting algorithms implementations in PHP.

:exclamation: This code is not intended to be used as library in other projects, that's because it's
not installable. Just use it for educational purposes. Please feel free to post any issues you'll could
find [here](https://github.com/awesome-php-code/sorting-algorithms/issues).

# What is a sorting algorithm :question:

In computer science, a sorting algorithm is an algorithm that puts elements of a list into an order. For instance,
if you have the set of elements `[5,4,3,2,1]` you could use a sorting algorithm to order this list as `[1,2,3,4,5]`.

# Supported Algorithms

:white_check_mark: Bubble sort algorithm ([Go to implementation](https://github.com/awesome-php-code/sorting-algorithms/blob/main/src/BubbleSort.php)).

# :books: Usage

## Bubble Sort algorithm

```php
use AwesomePhpCode\SortingAlgorithms\BubbleSort;

// [1,2,3,4,5]
$ordered = BubbleSort::sort([5,4,3,2,1]);
```