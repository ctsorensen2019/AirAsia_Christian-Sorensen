<?php
// Returns the ID as an int if it is a whole number >= 1, otherwise null.
function valid_id($value): ?int {
    $id = filter_var($value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    return $id === false ? null : $id;
}