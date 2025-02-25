<?php

declare(strict_types=1);

namespace App\Algorithms;

final class SelectionSort
{
    public function run(array $numbers): array
    {
        /** @var array<int, int> $newArray */
        $newArray = [];
        $arryLength = count($numbers);

        for ($i = 0; $i < $arryLength; $i++) {
            $index = $this->findSmallest($numbers);
            $newArray[] = $numbers[$index];
            // unset($numbers[$index]);
            // $numbers = array_values($numbers); // array_values reindex the array

            // using without unset.
            $numbers = array_merge(array_slice($numbers, 0, $index), array_slice($numbers, $index + 1));
        }

        return $newArray;
    }

    private function findSmallest(array $numbers): int
    {
        // print_r($numbers);
        /** @var int $smallestIndex */
        $smallestIndex = 0;

        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] < $numbers[$smallestIndex]) {
                $smallestIndex = $i;
            }
        }

        return $smallestIndex;
    }
}

$numbers = [99, 55, 9, 1, 3];
$selectionSort = new SelectionSort();
$sortedNumber = $selectionSort->run($numbers);
print_r($numbers);
print_r($sortedNumber);
