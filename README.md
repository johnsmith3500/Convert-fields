# Convert-fields
Convert fields of associative array into multidimensional array
```
INITIAL ARRAY:
Array
(
    [parent.child.field] => 1
    [parent.child.field2] => 2
    [parent2.child.name] => test
    [parent2.child2.name] => test
    [parent2.child2.position] => 10
    [parent3.child3.position] => 10
)

FINAL ARRAY:
Array
(
    [parent] => Array
        (
            [child] => Array
                (
                    [field] => 1
                    [field2] => 2
                )

        )

    [parent2] => Array
        (
            [child] => Array
                (
                    [name] => test
                )

            [child2] => Array
                (
                    [name] => test
                    [position] => 10
                )

        )

    [parent3] => Array
        (
            [child3] => Array
                (
                    [position] => 10
                )

        )

)
```
