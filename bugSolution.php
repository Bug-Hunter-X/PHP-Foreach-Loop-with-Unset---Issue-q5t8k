function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//Alternative solution:

function foo2(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    if ($value !== 'bar') {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [1] => baz )