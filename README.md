# PHP Foreach Loop with Unset() Issue
This repository demonstrates a common error in PHP when using `unset()` within a `foreach` loop. Unsetting elements directly in a `foreach` loop can disrupt the loop's internal pointer, causing elements to be skipped.  The example shows this issue and how to fix it using `array_filter`. The `bug.php` file contains the erroneous code, and `bugSolution.php` provides a corrected version.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Compare with the corrected output from `bugSolution.php`. 