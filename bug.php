function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The issue is that when we use unset() inside a foreach loop, 
// the internal array pointer of the foreach loop gets disrupted. 
//Because of this, the next element in the loop will be skipped. 
// This is because unset() modifies the array in place.

//Solution:
// Instead of using unset() inside foreach loop, we use array_filter or create new array.