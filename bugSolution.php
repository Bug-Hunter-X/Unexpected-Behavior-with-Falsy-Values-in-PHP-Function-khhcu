```php
function my_function($a, $b) {
  if ($a === null || $b === null || $a === false || $b === false || $a === 0 || $b === 0 || $a === "" || $b === "") {
    return null; // Handle null and other falsy values
  }

  // ... rest of your function ...
}
```
This improved function uses a more robust condition to check for `null` and other falsy values, providing a more reliable and predictable result.