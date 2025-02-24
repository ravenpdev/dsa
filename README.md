# Grokking Algorithms

### Big O notation

Big o notation is special notation that tells you how fast an algorithm is.

**Algorithm running times grow at different rates**

Lets assume 1ms to check one element.

| N of elements          | Simple Search | Binary Search |
| ---------------------- | ------------- | ------------- |
| 100 elements           | 100ms         | 7ms           |
| 10,000 elements        | 10seconds     | 14ms          |
| 1,000,000,000 elements | 11 days       | 30ms          |

**Big O establishes a worst-case run time**

- In simple search the worst case scenario is you have to search every element.

**Some common big O run times**

- O(log n), also known as log time. _Example: binary search_
- O(n), also known as linear time. _Example: simple search_
- O(n * log n). *Example: a fast sorting algorithm, like quicksort\*
- O(n²). _Example: a slow alrogithm, like selection sort_
- O(n!). _Example: a really slow algorithm, like traveling person_

Suppose you're drawing a grid of 16 boxes again. You can do 10 operations per second.

| # of boxes | O(lon n) | O(n)    | O(n log n) | O(n²)   | O(n!)             |
| ---------- | -------- | ------- | ---------- | ------- | ----------------- |
| 16         | 0.4sec   | 1.6sec  | 6.4sec     | 25.6sec | 6603years         |
| 256        | 0.8sec   | 25.6sec | 3.4min     | 1.hours | 2.7 x 10⁴⁹⁸years  |
| 1024       | 1.0sec   | 1.min   | 17min      | 1.2days | 1.7 x 10²⁶³¹years |

This explanation is a simplification. In reality, you can't convert from a big O runtime to a number of operations this neatly.

- Algorithm speed isn't measured in seconds but in growth of the number of operations.
- Instead of seconds, we talk about how quickly the runtime of an algorithm increases as the size of the input increases.
- Run time algorithms is express in big O notation.
- O(log n) is faster than O(n), and it gets a lot faster as the list of items you're searching grows.
