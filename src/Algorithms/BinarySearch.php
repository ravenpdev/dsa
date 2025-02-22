<?php

declare(strict_types=1);

namespace App\Algorithms;

final class BinarySearch
{
    public function run(): void
    {
        // Binary search only works when your list is in sorted order.
        // Binary search runs in logarithmic time
        // Running time is O(log n)

        /** @var array<int, int> $numbers */
        $numbers = range(1, 100, 1);
        $low = 0;
        $high = count($numbers) - 1;

        $numberToGuess = readline('Enter a number between 1 to 100: ');
        if (! is_numeric($numberToGuess)) {
            echo 'Please enter a valid number.';

            return;
        }

        $numberToGuess = (int) $numberToGuess;

        if ($numberToGuess < 1) {
            echo 'Number must be between 1 and 100';

            return;
        }

        $numberOfSteps = 1;

        echo "Number to guess: $numberToGuess".PHP_EOL;

        while ($low <= $high) {
            $mid = (int) round(($low + $high) / 2);
            $guess = $numbers[$mid];
            echo "Guess : $guess".PHP_EOL;

            if ($numberToGuess === $guess) {
                break;
            }

            if ($guess > $numberToGuess) {
                $high = $mid - 1;
            }

            if ($guess < $numberToGuess) { // 70 > 65
                $low = $mid + 1;
            }

            $numberOfSteps++;
        }

        echo "Number of steps before the item is found: $numberOfSteps";
    }
}

(new BinarySearch())->run();

echo PHP_EOL;

echo log(128, 2).PHP_EOL;
echo log(128 * 2, 2).PHP_EOL;
